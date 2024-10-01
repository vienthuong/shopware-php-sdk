<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

final class DefinitionCollection
{
    /**
     * @var array<string, EntityDefinition>
     */
    private array $definitions;

    public function set(EntityDefinition $definition): void
    {
        $this->definitions[$definition->getEntityName()] = $definition;
    }

    public function get(string $entityName): ?EntityDefinition
    {
        return $this->definitions[$entityName] ?? null;
    }
}
