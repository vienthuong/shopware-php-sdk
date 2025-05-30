<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PromotionSetgroup;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionSetgroupEntity $entity)
 * @method void set(string $key, PromotionSetgroupEntity $entity)
 * @method PromotionSetgroupEntity[] getIterator()
 * @method PromotionSetgroupEntity[] getElements()
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
