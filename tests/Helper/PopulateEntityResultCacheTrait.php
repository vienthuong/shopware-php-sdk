<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Helper;

use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Result\EntityResult;

trait PopulateEntityResultCacheTrait
{
    /**
     * @param array<int, array<string, mixed>> $included
     */
    private static function populateEntityResultCache(EntityResultCache $entityResultCache, array $included): void
    {
        foreach ($included as $entityData) {
            /** @phpstan-ignore-next-line */
            $includedEntityResult = EntityResult::fromData($entityData);
            $entityResultCache->set($includedEntityResult->entityName, $includedEntityResult->id, $includedEntityResult);
        }
    }
}
