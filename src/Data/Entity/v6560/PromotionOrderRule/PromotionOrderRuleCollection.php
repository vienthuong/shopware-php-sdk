<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\PromotionOrderRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                          add(PromotionOrderRuleEntity $entity)
 * @method void                          set(PromotionOrderRuleEntity $entity)
 * @method PromotionOrderRuleEntity[]    getIterator()
 * @method PromotionOrderRuleEntity[]    getElements()
 * @method PromotionOrderRuleEntity|null get(string $key)
 * @method PromotionOrderRuleEntity|null first()
 * @method PromotionOrderRuleEntity|null last()
 */
class PromotionOrderRuleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionOrderRuleEntity::class;
    }
}
