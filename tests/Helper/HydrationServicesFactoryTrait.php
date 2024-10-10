<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Helper;

use Vin\ShopwareSdk\Definition\DefinitionProvider;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Definition\EntityDefinitionCollectionPopulator\WithSdkMapping;
use Vin\ShopwareSdk\Definition\SchemaProvider;
use Vin\ShopwareSdk\Definition\SchemaProviderInterface;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydrator;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParser;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParser;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;

trait HydrationServicesFactoryTrait
{
    private static function createServicesForHydration($shopwareVersion): array
    {
        $definitionCollectionPopulator = new WithSdkMapping();
        $definitionProvider = new DefinitionProvider([$definitionCollectionPopulator], $shopwareVersion);

        $schemaProvider = new SchemaProvider($definitionProvider);

        $attributeHydrator = new AttributeHydrator($schemaProvider);
        $relationshipsParser = new RelationshipsParser();
        $extensionParser = new ExtensionParser();

        return [
            DefinitionProviderInterface::class => $definitionProvider,
            SchemaProviderInterface::class => $schemaProvider,
            AttributeHydratorInterface::class => $attributeHydrator,
            RelationshipsParserInterface::class => $relationshipsParser,
            ExtensionParserInterface::class => $extensionParser,
        ];
    }
}
