<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Definition\DefinitionCollectionPopulator;
use Vin\ShopwareSdk\Definition\DefinitionProvider;
use Vin\ShopwareSdk\Definition\EntityDefinitionCollectionPopulator\WithSdkMapping;

final class DefinitionProviderFactory
{
    public static function create(array $additionalDefinitionCollectionPopulators = [], string $shopwareVersion = '0.0.0.0'): DefinitionProvider
    {
        $sdkMappingDefinitionCollectionPopulator = new WithSdkMapping();
        /** @var DefinitionCollectionPopulator[] $definitionCollectionPopulators */
        $definitionCollectionPopulators = array_merge([$sdkMappingDefinitionCollectionPopulator], $additionalDefinitionCollectionPopulators);
        usort($definitionCollectionPopulators, fn (DefinitionCollectionPopulator $a, DefinitionCollectionPopulator $b) => $a::priority() <=> $b::priority());

        return new DefinitionProvider($definitionCollectionPopulators, $shopwareVersion);
    }
}
