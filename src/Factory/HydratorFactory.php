<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Definition\SchemaProviderInterface;
use Vin\ShopwareSdk\Hydrate\EntityHydrator;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParser;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParser;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;

class HydratorFactory
{
    public static function create(
        ?DefinitionProviderInterface $definitionProvider = null,
        ?SchemaProviderInterface $schemaProvider = null,
        ?AttributeHydratorInterface $attributeHydrator = null,
        ?RelationshipsParserInterface $relationshipsParser = null,
        ?ExtensionParserInterface $extensionParser = null,
        string $shopwareVersion = '0.0.0.0'
    ): EntityHydrator {
        if (! $definitionProvider instanceof DefinitionProviderInterface) {
            $definitionProvider = DefinitionProviderFactory::create(shopwareVersion: $shopwareVersion);
        }

        if (! $schemaProvider instanceof SchemaProviderInterface) {
            $schemaProvider = SchemaProviderFactory::create($definitionProvider);
        }

        if (! $attributeHydrator instanceof AttributeHydratorInterface) {
            $attributeHydrator = AttributeHydratorFactory::create($schemaProvider);
        }

        if (! $relationshipsParser instanceof RelationshipsParserInterface) {
            $relationshipsParser = new RelationshipsParser();
        }

        if (! $extensionParser instanceof ExtensionParserInterface) {
            $extensionParser = new ExtensionParser();
        }

        return new EntityHydrator($definitionProvider, $attributeHydrator, $relationshipsParser, $extensionParser);
    }
}
