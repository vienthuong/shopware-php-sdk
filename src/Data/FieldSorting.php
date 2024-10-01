<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

class FieldSorting implements ParseAware
{
    public const ASCENDING = 'ASC';

    public const DESCENDING = 'DESC';

    public function __construct(
        public string $field,
        public string $order = self::ASCENDING,
        public bool $naturalSorting = false
    ) {
    }

    public function parse(): array
    {
        return [
            'field' => $this->field,
            'order' => $this->order,
            'naturalSorting' => $this->naturalSorting,
        ];
    }
}
