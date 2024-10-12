<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\PromotionSetgroup;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                         add(PromotionSetgroupEntity $entity)
 * @method void                         set(PromotionSetgroupEntity $entity)
 * @method PromotionSetgroupEntity[]    getIterator()
 * @method PromotionSetgroupEntity[]    getElements()
 * @method PromotionSetgroupEntity|null get(string $key)
 * @method PromotionSetgroupEntity|null first()
 * @method PromotionSetgroupEntity|null last()
 */
class PromotionSetgroupCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionSetgroupEntity::class;
    }
}
