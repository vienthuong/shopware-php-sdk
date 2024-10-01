<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Hydrate\EntityHydrator;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;

class HydratorFactory
{
    public static bool $hydratorUseCache = false;

    public static function create(): HydratorInterface
    {
        return new EntityHydrator(self::$hydratorUseCache);
    }
}
