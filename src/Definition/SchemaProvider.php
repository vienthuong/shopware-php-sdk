<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Exception\DefinitionNotFoundException;
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
        $schema = $this->schemaCollection->get($entityName);
        if (! $schema instanceof Schema) {
            try {
                $entityDefinition = $this->entityDefinitionProvider->getDefinition($entityName);
            } catch (DefinitionNotFoundException) {
                throw new SchemaNotFoundException($entityName);
            }

            $schema = $entityDefinition->getSchema();
            $this->schemaCollection->set($entityName, $schema);
        }

        return $schema;
    }
}
