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

class Criteria implements ParseAware
{
    public int $page;

    public int $limit;

    public ?string $term;

    /**
     * @var Filter[]
     */
    public array $filters = [];

    public array $ids = [];

    public array $queries = [];

    /**
     * @var Association[]
     */
    public array $associations = [];

    /**
     * @var Filter[]
     */
    public array $postFilter = [];

    /**
     * @var FieldSorting[]
     */
    public array $sortings = [];

    /**
     * @var FilterAggregation[]
     */
    public array $aggregations = [];

    public array $grouping = [];

    public array $groupFields = [];

    public int $totalCountMode = 1;

    public function __construct(int $page = 1, int $limit = 25)
    {
        $this->page = $page;
        $this->limit = $limit;
    }

    public function addFilter(Filter $filter): self
    {
        $this->filters[] = $filter;

        return $this;
    }

    public function addPostFilter(Filter $postFilter): self
    {
        $this->postFilter[] = $postFilter;

        return $this;
    }

    public function addQuery(Filter $filter, int $score, ?string $scoreField = null): self
    {
        $query = ['score' => $score, 'query' => $filter->parse()];

        if ($scoreField) {
            $query['scoreField'] = $scoreField;
        }

        $this->queries[] = $query;

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

    public function addSorting(FieldSorting $sorting): self
    {
        $this->sortings[] = $sorting;

        return $this;
    }

    public function addAggregation(FilterAggregation $aggregation): self
    {
        $this->aggregations[] = $aggregation;

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

    /**
     * @param  string  $field
     * @param mixed $value
     * @return EqualsFilter
     */
    public static function equals(string $field, $value): EqualsFilter
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

        if ($this->limit) {
            $params['limit'] = $this->limit;
        }

        if ($this->term !== null) {
            $params['term'] = $this->term;
        }

        if (! empty($this->queries)) {
            $params['query'] = $this->queries;
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

        if ($this->totalCountMode !== null) {
            $params['total-count-mode'] = $this->totalCountMode;
        }

        return $params;
    }
}
