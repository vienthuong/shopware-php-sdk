<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalesChannelCurrency;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelCurrencyEntity $entity)
 * @method void set(string $key, SalesChannelCurrencyEntity $entity)
 * @method SalesChannelCurrencyEntity[] getIterator()
 * @method SalesChannelCurrencyEntity[] getElements()
 * @method SalesChannelCurrencyEntity|null get(string $key)
 * @method SalesChannelCurrencyEntity|null first()
 * @method SalesChannelCurrencyEntity|null last()
 */
class SalesChannelCurrencyCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SalesChannelCurrencyEntity::class;
    }
}
