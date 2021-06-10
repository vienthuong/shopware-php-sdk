<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

class FieldSorting implements ParseAware
{
    public const ASCENDING = 'ASC';

    public const DESCENDING = 'DESC';

    public string $field;

    public string $order;

    public bool $naturalSorting;

    public function __construct(
        string $field,
        string $order = self::ASCENDING,
        bool $naturalSorting = false
    ) {
        $this->field = $field;
        $this->order = $order;
        $this->naturalSorting = $naturalSorting;
    }

    public function parse(): array
    {
        return [
            'field' => $this->field,
            'order' => $this->order,
            'naturalSorting' => $this->naturalSorting
        ];
    }
}
