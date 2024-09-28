<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

use Vin\ShopwareSdk\Data\Aggregation\Aggregation;
use Vin\ShopwareSdk\Data\Aggregation\FilterAggregation;
use Vin\ShopwareSdk\Data\Aggregation\TermsAggregation;
use Vin\ShopwareSdk\Data\Filter\ContainsFilter;
use Vin\ShopwareSdk\Data\Filter\EqualsAnyFilter;
use Vin\ShopwareSdk\Data\Filter\EqualsFilter;
use Vin\ShopwareSdk\Data\Filter\Filter;
use Vin\ShopwareSdk\Data\Filter\MultiFilter;
use Vin\ShopwareSdk\Data\Filter\NotFilter;
use Vin\ShopwareSdk\Data\Filter\PrefixFilter;
use Vin\ShopwareSdk\Data\Filter\RangeFilter;
use Vin\ShopwareSdk\Data\Filter\SuffixFilter;
use Vin\ShopwareSdk\Data\ScoreQuery\ScoreQuery;

class Criteria implements ParseAware
{
    /**
     * no total count will be selected. Should be used if no pagination required (fastest)
     */
    public const TOTAL_COUNT_MODE_NONE = 0;

    /**
     * exact total count will be selected. Should be used if an exact pagination is required (slow)
     */
    public const TOTAL_COUNT_MODE_EXACT = 1;

    /**
     * fetches limit * 5 + 1. Should be used if pagination can work with "next page exists" (fast)
     */
    public const TOTAL_COUNT_MODE_NEXT_PAGES = 2;

    /**
     * Don't use term parameters together with query parameters.
     */
    private ?string $term = null;

    /**
     * @var Filter[]
     */
    private array $filters = [];

    private array $ids = [];

    /**
     * @var ScoreQuery[]
     */
    private array $queries = [];

    /**
     * @var Association[]
     */
    private array $associations = [];

    /**
     * @var Filter[]
     */
    private array $postFilter = [];

    /**
     * @var FieldSorting[]
     */
    private array $sortings = [];

    /**
     * @var Aggregation[]
     */
    private array $aggregations = [];

    private array $grouping = [];

    private array $groupFields = [];

    private int $totalCountMode = 1;

    private array $includes = [];

    /**
     * Default should be null to not limit artificily
     *
     * @param $page
     * @param $limit
     */
    public function __construct(
        /**
         * page and limit should be mixed to allow null also
         * this would prevent from generating pagination problems
         */
        private mixed $page = null,
        /**
         * see above
         */
        private mixed $limit = null
    )
    {
    }

    public function addFilter(Filter ...$filters): self
    {
        foreach ($filters as $filter) {
            $this->filters[] = $filter;
        }

        return $this;
    }

    public function addPostFilter(Filter ...$queries): self
    {
        foreach ($queries as $query) {
            $this->postFilter[] = $query;
        }

        return $this;
    }

    public function addQuery(ScoreQuery ...$queries): self
    {
        foreach ($queries as $query) {
            $this->queries[] = $query;
        }

        return $this;
    }

    public function addAssociations(array $paths): self
    {
        foreach ($paths as $path) {
            $this->addAssociation($path);
        }

        return $this;
    }

    public function addAssociation(string $path): self
    {
        $parts = \explode('.', $path);

        $criteria = $this;

        foreach ($parts as $part) {
            $criteria = $criteria->getAssociation($part);
        }

        return $this;
    }

    public function getAssociation(string $path): Criteria
    {
        $parts = \explode('.', $path);

        $criteria = $this;

        foreach ($parts as $part) {
            if (!$criteria->hasAssociation($part)) {
                $criteria->associations[] = new Association($part, new Criteria());
            }

            $criteria = $criteria->getAssociationCriteria($part) ?? $this;
        }

        return $criteria;
    }

    public function hasAssociation(string $property): bool
    {
        foreach ($this->associations as $association) {
            if ($association->association === $property) {
                return true;
            }
        }

        return false;
    }

    public function getAssociationCriteria(string $path): ?Criteria
    {
        foreach ($this->associations as $association) {
            if ($association->association === $path) {
                return $association->criteria;
            }
        }

        return null;
    }

    public function addGrouping(string $field): self
    {
        $this->grouping[] = $field;

        return $this;
    }

    public function addSorting(FieldSorting ...$sortings): self
    {
        foreach ($sortings as $sorting) {
            $this->sortings[] = $sorting;
        }

        return $this;
    }

    public function addAggregation(Aggregation ...$aggregations): self
    {
        foreach ($aggregations as $aggregation) {
            $this->aggregations[] = $aggregation;
        }

        return $this;
    }

    public function setIds(array $ids): self
    {
        $this->ids = $ids;

        return $this;
    }

    public function addGroupField(string $groupField): self
    {
        $this->groupFields[] = $groupField;

        return $this;
    }

    public function resetSorting(): self
    {
        $this->sortings = [];

        return $this;
    }

    public function sort(
        string $field,
        string $order = FieldSorting::ASCENDING,
        bool $naturalSorting = false
    ): FieldSorting {
        return new FieldSorting($field, $order, $naturalSorting);
    }

    public function naturalSorting(string $field, string $order = FieldSorting::ASCENDING): FieldSorting
    {
        return new FieldSorting($field, $order, true);
    }

    public static function filterAggregation(string $name, array $filter, Aggregation $aggregation): FilterAggregation
    {
        return new FilterAggregation($name, $filter, $aggregation);
    }

    public static function termsAggregation(
        string $name,
        string $field,
        ?int $limit,
        ?FieldSorting $sorting = null,
        ?Aggregation $aggregation = null
    ): TermsAggregation {
        return new TermsAggregation($name, $field, $limit, $sorting, $aggregation);
    }

    public static function multi(string $operator, array $queries = []): MultiFilter
    {
        return new MultiFilter($operator, $queries);
    }

    public static function contains(string $field, string $value): ContainsFilter
    {
        return new ContainsFilter($field, $value);
    }

    public static function prefix(string $field, string $value): PrefixFilter
    {
        return new PrefixFilter($field, $value);
    }

    public static function suffix(string $field, string $value): SuffixFilter
    {
        return new SuffixFilter($field, $value);
    }

    public static function equalsAny(string $field, array $value): EqualsAnyFilter
    {
        return new EqualsAnyFilter($field, $value);
    }

    public static function range(string $field, array $range): RangeFilter
    {
        return new RangeFilter($field, $range);
    }

    public static function equals(string $field, mixed $value): EqualsFilter
    {
        return new EqualsFilter($field, $value);
    }

    public static function not(string $operator, array $queries): NotFilter
    {
        return new NotFilter($operator, $queries);
    }

    public function parse(): array
    {
        $params = [];

        if (! empty($this->ids)) {
            $params['ids'] = \implode('|', $this->ids);
        }

        if ($this->page) {
            $params['page'] = $this->page;
        }

        $params['limit'] = $this->limit;

        if ($this->term !== null) {
            $params['term'] = $this->term;
        }

        if (! empty($this->queries)) {
            $params['query'] = [];

            foreach ($this->queries as $query) {
                $params['query'][] = $query->parse();
            }
        }

        if (! empty($this->filters)) {
            $params['filter'] = [];

            foreach ($this->filters as $filter) {
                $params['filter'][] = $filter->parse();
            }
        }

        if (! empty($this->postFilter)) {
            $params['post-filter'] = [];

            foreach ($this->postFilter as $postFilter) {
                $params['post-filter'][] = $postFilter->parse();
            }
        }

        if (! empty($this->sortings)) {
            $params['sort'] = [];

            foreach ($this->sortings as $sorting) {
                $params['sort'][] = $sorting->parse();
            }
        }

        if (! empty($this->aggregations)) {
            $params['aggregations'] = [];
            foreach ($this->aggregations as $aggregation) {
                $params['aggregations'][] = $aggregation->parse();
            }
        }

        if (! empty($this->groupFields)) {
            $params['groupFields'] = $this->groupFields;
        }

        if (! empty($this->grouping)) {
            $params['grouping'] = $this->grouping;
        }

        if (! empty($this->associations)) {
            $params['associations'] = [];

            foreach ($this->associations as $association) {
                $params['associations'][$association->association] = $association->criteria->parse();
            }
        }

        if (!empty($this->includes)) {
            $params['includes'] = $this->includes;
        }

        if ($this->totalCountMode !== null) {
            $params['total-count-mode'] = $this->totalCountMode;
        }

        return $params;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(string $term): void
    {
        $this->term = $term;
    }

    public function getFilters(): array
    {
        return $this->filters;
    }

    public function setFilters(array $filters): void
    {
        $this->filters = $filters;
    }

    public function getQueries(): array
    {
        return $this->queries;
    }

    public function setQueries(array $queries): void
    {
        $this->queries = $queries;
    }

    public function getAssociations(): array
    {
        return $this->associations;
    }

    public function setAssociations(array $associations): void
    {
        $this->associations = $associations;
    }

    public function getPostFilter(): array
    {
        return $this->postFilter;
    }

    public function setPostFilter(array $postFilter): void
    {
        $this->postFilter = $postFilter;
    }

    public function getSortings(): array
    {
        return $this->sortings;
    }

    public function setSortings(array $sortings): void
    {
        $this->sortings = $sortings;
    }

    public function getAggregations(): array
    {
        return $this->aggregations;
    }

    public function setAggregations(array $aggregations): void
    {
        $this->aggregations = $aggregations;
    }

    public function getGrouping(): array
    {
        return $this->grouping;
    }

    public function setGrouping(array $grouping): void
    {
        $this->grouping = $grouping;
    }

    public function getGroupFields(): array
    {
        return $this->groupFields;
    }

    public function setGroupFields(array $groupFields): void
    {
        $this->groupFields = $groupFields;
    }

    public function getTotalCountMode(): int
    {
        return $this->totalCountMode;
    }

    public function setTotalCountMode(int $totalCountMode): void
    {
        $this->totalCountMode = $totalCountMode;
    }

    public function getIncludes(): array
    {
        return $this->includes;
    }

    public function setIncludes(array $includes): self
    {
        $this->includes = $includes;

        return $this;
    }

    public function addInclude(string $apiAlias, array $include): self
    {
        $included = $this->includes[$apiAlias] ?? [];

        $this->includes[$apiAlias] = array_merge($included, $include);

        return $this;
    }

    public function removeInclude(string $apiAlias): self
    {
        unset($this->includes[$apiAlias]);

        return $this;
    }
}
