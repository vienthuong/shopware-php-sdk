<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

class MaxAggregation extends Aggregation
{
    public string $name;

    public string $field;

    public function __construct(string $name, string $field)
    {
        $this->name = $name;
        $this->field = $field;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_MAX,
            'name' => $this->name,
            'field' => $this->field
        ];
    }
}
