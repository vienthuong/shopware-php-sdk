<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class EqualsAnyFilter extends Filter
{
    private string $field;

    private array $value;

    public function __construct(string $field, array $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_EQUALS_ANY,
            'field' => $this->field,
            'value' => \implode('|', $this->value)
        ];
    }
}
