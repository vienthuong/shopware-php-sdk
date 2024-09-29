<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class SuffixFilter extends Filter
{
    public function __construct(
        private readonly string $field,
        private readonly string $value
    ) {
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_SUFFIX,
            'field' => $this->field,
            'value' => $this->value,
        ];
    }
}
