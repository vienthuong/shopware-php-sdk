<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

use Vin\ShopwareSdk\Data\Filter\Filter;

class FilterAggregation extends Aggregation
{
    public function __construct(
        public string $name,
        /**
         * @var Filter[]
         */
        public array $filter,
        public Aggregation $aggregation
    )
    {
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_FILTER,
            'name' => $this->name,
            'filter' => array_map(fn(Filter $filter) => $filter->parse(), $this->filter),
            'aggregation' => $this->aggregation->parse()
        ];
    }
}
