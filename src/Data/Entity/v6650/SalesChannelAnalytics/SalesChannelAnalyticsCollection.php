<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\SalesChannelAnalytics;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                             add(SalesChannelAnalyticsEntity $entity)
 * @method void                             set(SalesChannelAnalyticsEntity $entity)
 * @method SalesChannelAnalyticsEntity[]    getIterator()
 * @method SalesChannelAnalyticsEntity[]    getElements()
 * @method SalesChannelAnalyticsEntity|null get(string $key)
 * @method SalesChannelAnalyticsEntity|null first()
 * @method SalesChannelAnalyticsEntity|null last()
 */
class SalesChannelAnalyticsCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SalesChannelAnalyticsEntity::class;
    }
}
