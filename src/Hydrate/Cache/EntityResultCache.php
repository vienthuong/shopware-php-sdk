<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Cache;

use Vin\ShopwareSdk\Hydrate\Result\EntityResult;

final class EntityResultCache
{
    /**
     * @var array<string, EntityResult>
     */
    private array $entityResults = [];

    /**
     * @return EntityResult[]
     */
    public function all(): array
    {
        return array_values($this->entityResults);
    }

    public function get(string $type, string $id): EntityResult
    {
        return $this->entityResults[$type . '-' . $id] ?? throw new \RuntimeException(sprintf(
            'Entity result of type %s with id %s not found in cache',
            $type,
            $id
        ));
    }

    public function set(string $type, string $id, EntityResult $entity): void
    {
        $this->entityResults[$type . '-' . $id] = $entity;
    }
}
