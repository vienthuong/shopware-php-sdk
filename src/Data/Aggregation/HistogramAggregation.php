<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

use Vin\ShopwareSdk\Data\Filter\Filter;

class HistogramAggregation extends Aggregation
{
    public const PER_MINUTE = 'minute';

    public const PER_HOUR = 'hour';

    public const PER_DAY = 'day';

    public const PER_WEEK = 'week';

    public const PER_MONTH = 'month';

    public const PER_QUARTER = 'quarter';

    public const PER_YEAR = 'year';

    public string $name;

    /**
     * @var Filter[]
     */
    public array $filter;

    public ?Aggregation $aggregation = null;

    public string $field;

    public string $interval;

    public ?string $format;

    public function __construct(
        string $name,
        string $field,
        string $interval,
        ?string $format = null,
        ?Aggregation $aggregation = null
    ) {
        $this->name = $name;
        $this->aggregation = $aggregation;
        $this->field = $field;
        $this->interval = $interval;
        $this->format = $format;
    }

    public function parse(): array
    {
        return array_filter(
            [
                'type' => self::TYPE_HISTOGRAM,
                'name' => $this->name,
                'field' => $this->field,
                'interval' => $this->interval,
                'format' => $this->format,
                'aggregation' => $this->aggregation ? $this->aggregation->parse() : null,
            ]
        );
    }
}
