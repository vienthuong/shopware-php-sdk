<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Definition\SchemaProviderInterface;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydrator;

final class AttributeHydratorFactory
{
    public static function create(?SchemaProviderInterface $schemaProvider = null): AttributeHydrator
    {
        if (! $schemaProvider instanceof SchemaProviderInterface) {
            $schemaProvider = SchemaProviderFactory::create();
        }

        return new AttributeHydrator($schemaProvider);
    }
}
