<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

class AverageAggregation extends Aggregation
{
    public function __construct(
        public string $name,
        public string $field
    ) {
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_AVG,
            'name' => $this->name,
            'field' => $this->field,
        ];
    }
}
