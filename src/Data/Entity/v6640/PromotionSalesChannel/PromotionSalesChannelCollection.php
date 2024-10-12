<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\PromotionSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                             add(PromotionSalesChannelEntity $entity)
 * @method void                             set(PromotionSalesChannelEntity $entity)
 * @method PromotionSalesChannelEntity[]    getIterator()
 * @method PromotionSalesChannelEntity[]    getElements()
 * @method PromotionSalesChannelEntity|null get(string $key)
 * @method PromotionSalesChannelEntity|null first()
 * @method PromotionSalesChannelEntity|null last()
 */
class PromotionSalesChannelCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionSalesChannelEntity::class;
    }
}
