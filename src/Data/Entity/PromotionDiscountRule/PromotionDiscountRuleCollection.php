<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PromotionDiscountRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionDiscountRuleEntity $entity)
 * @method void set(PromotionDiscountRuleEntity $entity)
 * @method PromotionDiscountRuleEntity[] getIterator()
 * @method PromotionDiscountRuleEntity[] getElements()
 * @method PromotionDiscountRuleEntity|null get(string $key)
 * @method PromotionDiscountRuleEntity|null first()
 * @method PromotionDiscountRuleEntity|null last()
 */
class PromotionDiscountRuleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionDiscountRuleEntity::class;
    }
}
