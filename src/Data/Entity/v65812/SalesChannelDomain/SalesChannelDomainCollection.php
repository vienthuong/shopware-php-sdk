<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\SalesChannelDomain;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                          add(SalesChannelDomainEntity $entity)
 * @method void                          set(SalesChannelDomainEntity $entity)
 * @method SalesChannelDomainEntity[]    getIterator()
 * @method SalesChannelDomainEntity[]    getElements()
 * @method SalesChannelDomainEntity|null get(string $key)
 * @method SalesChannelDomainEntity|null first()
 * @method SalesChannelDomainEntity|null last()
 */
class SalesChannelDomainCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SalesChannelDomainEntity::class;
    }
}
