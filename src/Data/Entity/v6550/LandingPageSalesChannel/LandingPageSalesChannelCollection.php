<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\LandingPageSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(LandingPageSalesChannelEntity $entity)
 * @method void                               set(LandingPageSalesChannelEntity $entity)
 * @method LandingPageSalesChannelEntity[]    getIterator()
 * @method LandingPageSalesChannelEntity[]    getElements()
 * @method LandingPageSalesChannelEntity|null get(string $key)
 * @method LandingPageSalesChannelEntity|null first()
 * @method LandingPageSalesChannelEntity|null last()
 */
class LandingPageSalesChannelCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return LandingPageSalesChannelEntity::class;
    }
}
