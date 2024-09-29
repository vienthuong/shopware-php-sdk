<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class EqualsAnyFilter extends Filter
{
    public function __construct(
        private readonly string $field,
        private readonly array $value
    ) {
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_EQUALS_ANY,
            'field' => $this->field,
            'value' => \implode('|', $this->value),
        ];
    }
}
