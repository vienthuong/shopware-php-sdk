<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

class AggregationResultCollection
{
    private array $elements = [];

    public function __construct(iterable $elements = [])
    {
        foreach ($elements as $key => $aggregation) {
            $this->add($key, $aggregation);
        }
    }

    /**
     */
    public function add(string $key, $aggregation): void
    {
        $this->elements[$key] = $aggregation;
    }

    public function get(string $key)
    {
        return $this->elements[$key] ?? null;
    }

    public function getElements(): array
    {
        return $this->elements;
    }
}
