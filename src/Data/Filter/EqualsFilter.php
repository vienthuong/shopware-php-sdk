<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class EqualsFilter extends Filter
{
    public function __construct(
        private readonly string $field,
        private readonly mixed $value
    ) {
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_EQUALS,
            'field' => $this->field,
            'value' => $this->value,
        ];
    }
}
