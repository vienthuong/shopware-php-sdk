<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class EqualsFilter extends Filter
{
    private string $field;

    private $value;

    /**
     * EqualsFilter constructor.
     */
    public function __construct(string $field, $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_EQUALS,
            'field' => $this->field,
            'value' => $this->value
        ];
    }
}
