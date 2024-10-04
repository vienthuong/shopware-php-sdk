<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\ShippingMethod;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                      add(ShippingMethodEntity $entity)
 * @method void                      set(ShippingMethodEntity $entity)
 * @method ShippingMethodEntity[]    getIterator()
 * @method ShippingMethodEntity[]    getElements()
 * @method ShippingMethodEntity|null get(string $key)
 * @method ShippingMethodEntity|null first()
 * @method ShippingMethodEntity|null last()
 */
class ShippingMethodCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ShippingMethodEntity::class;
    }
}
