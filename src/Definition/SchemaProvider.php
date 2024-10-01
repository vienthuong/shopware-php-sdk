<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Exception\SchemaNotFoundException;

final class SchemaProvider implements SchemaProviderInterface
{
    private readonly SchemaCollection $schemaCollection;

    public function __construct(
        private readonly DefinitionProviderInterface $entityDefinitionProvider
    ) {
        $this->schemaCollection = new SchemaCollection();
    }

    public function getSchema(string $entityName): Schema
    {
        if (! $this->schemaCollection->get($entityName) instanceof Schema) {
            $entityDefinition = $this->entityDefinitionProvider->getDefinition($entityName);
            $this->schemaCollection->set($entityDefinition->getEntityName(), $entityDefinition->getSchema());
        }

        return $this->schemaCollection->get($entityName) ?? throw new SchemaNotFoundException($entityName);
    }
}
