<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\PromotionSetgroupRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                             add(PromotionSetgroupRuleEntity $entity)
 * @method void                             set(PromotionSetgroupRuleEntity $entity)
 * @method PromotionSetgroupRuleEntity[]    getIterator()
 * @method PromotionSetgroupRuleEntity[]    getElements()
 * @method PromotionSetgroupRuleEntity|null get(string $key)
 * @method PromotionSetgroupRuleEntity|null first()
 * @method PromotionSetgroupRuleEntity|null last()
 */
class PromotionSetgroupRuleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionSetgroupRuleEntity::class;
    }
}
