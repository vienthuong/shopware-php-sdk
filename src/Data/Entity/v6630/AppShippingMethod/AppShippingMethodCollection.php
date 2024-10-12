<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\AppShippingMethod;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                         add(AppShippingMethodEntity $entity)
 * @method void                         set(AppShippingMethodEntity $entity)
 * @method AppShippingMethodEntity[]    getIterator()
 * @method AppShippingMethodEntity[]    getElements()
 * @method AppShippingMethodEntity|null get(string $key)
 * @method AppShippingMethodEntity|null first()
 * @method AppShippingMethodEntity|null last()
 */
class AppShippingMethodCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppShippingMethodEntity::class;
    }
}
