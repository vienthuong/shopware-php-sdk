<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ShippingMethodPrice;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(ShippingMethodPriceEntity $entity)
 * @method void                           set(ShippingMethodPriceEntity $entity)
 * @method ShippingMethodPriceEntity[]    getIterator()
 * @method ShippingMethodPriceEntity[]    getElements()
 * @method ShippingMethodPriceEntity|null get(string $key)
 * @method ShippingMethodPriceEntity|null first()
 * @method ShippingMethodPriceEntity|null last()
 */
class ShippingMethodPriceCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ShippingMethodPriceEntity::class;
    }
}
