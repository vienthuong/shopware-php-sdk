<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

/**
 * @example
 *
 * new RangeFilter('price', [
 *      RangeFilter::GTE => 5.99,
 *      RangeFilter::LTE => 21.99
 * ])
 *
 * new RangeFilter('price', [
 *      RangeFilter::GT => 5.99
 * ])
 */
class RangeFilter extends Filter
{
    public const LTE = 'lte';

    public const LT = 'lt';

    public const GTE = 'gte';

    public const GT = 'gt';

    private string $field;

    private array $range;

    public function __construct(string $field, array $range)
    {
        $this->field = $field;
        $this->range = $range;
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_RANGE,
            'field' => $this->field,
            'parameters' => $this->range
        ];
    }
}
