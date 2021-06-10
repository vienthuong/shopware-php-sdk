<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

use Vin\ShopwareSdk\Data\FieldSorting;
use Vin\ShopwareSdk\Data\Filter\Filter;

class TermsAggregation extends Aggregation
{
    public string $name;

    /**
     * @var Filter[]
     */
    public array $filter;

    public ?Aggregation $aggregation = null;

    public string $field;

    public ?int $limit;

    public ?FieldSorting $sort = null;

    public function __construct(
        string $name,
        string $field,
        ?int $limit = null,
        ?FieldSorting $sort = null,
        ?Aggregation $aggregation = null
    ) {
        $this->name = $name;
        $this->aggregation = $aggregation;
        $this->field = $field;
        $this->limit = $limit;
        $this->sort = $sort;
    }

    public function parse(): array
    {
        return array_filter(
            [
                'type' => self::TYPE_FILTER,
                'name' => $this->name,
                'field' => $this->field,
                'limit' => $this->limit,
                'sort' => $this->sort ? $this->sort->parse() : null,
                'aggregation' => $this->aggregation ? $this->aggregation->parse() : null,
            ]
        );
    }
}
