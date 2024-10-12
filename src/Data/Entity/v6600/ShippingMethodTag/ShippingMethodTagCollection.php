<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\ShippingMethodTag;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                         add(ShippingMethodTagEntity $entity)
 * @method void                         set(ShippingMethodTagEntity $entity)
 * @method ShippingMethodTagEntity[]    getIterator()
 * @method ShippingMethodTagEntity[]    getElements()
 * @method ShippingMethodTagEntity|null get(string $key)
 * @method ShippingMethodTagEntity|null first()
 * @method ShippingMethodTagEntity|null last()
 */
class ShippingMethodTagCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ShippingMethodTagEntity::class;
    }
}
