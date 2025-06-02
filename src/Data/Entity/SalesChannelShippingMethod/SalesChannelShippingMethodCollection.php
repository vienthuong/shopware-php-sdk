<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalesChannelShippingMethod;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelShippingMethodEntity $entity)
 * @method void set(string $key, SalesChannelShippingMethodEntity $entity)
 * @method SalesChannelShippingMethodEntity[] getIterator()
 * @method SalesChannelShippingMethodEntity[] getElements()
 * @method SalesChannelShippingMethodEntity|null get(string $key)
 * @method SalesChannelShippingMethodEntity|null first()
 * @method SalesChannelShippingMethodEntity|null last()
 */
class SalesChannelShippingMethodCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SalesChannelShippingMethodEntity::class;
    }
}
