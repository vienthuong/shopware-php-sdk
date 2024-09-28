<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

use Vin\ShopwareSdk\Data\FieldSorting;
use Vin\ShopwareSdk\Data\Filter\Filter;

class TermsAggregation extends Aggregation
{
    /**
     * @var Filter[]
     */
    public array $filter;

    public function __construct(public string $name, public string $field, public ?int $limit = null, public ?FieldSorting $sort = null, public ?Aggregation $aggregation = null)
    {
    }

    public function parse(): array
    {
        return array_filter(
            [
                'type' => self::TYPE_TERMS,
                'name' => $this->name,
                'field' => $this->field,
                'limit' => $this->limit,
                'sort' => $this->sort ? $this->sort->parse() : null,
                'aggregation' => $this->aggregation ? $this->aggregation->parse() : null,
            ]
        );
    }
}
