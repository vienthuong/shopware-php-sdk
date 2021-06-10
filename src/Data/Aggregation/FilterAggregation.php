<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

use Vin\ShopwareSdk\Data\Filter\Filter;
use Vin\ShopwareSdk\Data\ParseAware;

class FilterAggregation extends Aggregation
{
    public string $name;

    /**
     * @var Filter[]
     */
    public array $filter;

    public Aggregation $aggregation;

    public function __construct(string $name, array $filter, Aggregation $aggregation)
    {
        $this->name = $name;
        $this->filter = $filter;
        $this->aggregation = $aggregation;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_FILTER,
            'name' => $this->name,
            'filter' => array_map(function (Filter $filter) {
                return $filter->parse();
            }, $this->filter),
            'aggregation' => $this->aggregation->parse()
        ];
    }
}
