<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class ContainsFilter extends Filter
{
    private string $field;

    private string $value;

    public function __construct(string $field, string $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_CONTAINS,
            'field' => $this->field,
            'value' => $this->value
        ];
    }
}
