<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Definition\SchemaProvider;

final class SchemaProviderFactory
{
    public static function create(?DefinitionProviderInterface $definitionProvider = null, string $shopwareVersion = '0.0.0.0'): SchemaProvider
    {
        if (! $definitionProvider instanceof DefinitionProviderInterface) {
            $definitionProvider = DefinitionProviderFactory::create(shopwareVersion: $shopwareVersion);
        }

        return new SchemaProvider($definitionProvider);
    }
}
