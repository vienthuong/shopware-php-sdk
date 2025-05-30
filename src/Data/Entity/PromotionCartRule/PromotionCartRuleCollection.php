<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PromotionCartRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionCartRuleEntity $entity)
 * @method void set(string $key, PromotionCartRuleEntity $entity)
 * @method PromotionCartRuleEntity[] getIterator()
 * @method PromotionCartRuleEntity[] getElements()
 * @method PromotionCartRuleEntity|null get(string $key)
 * @method PromotionCartRuleEntity|null first()
 * @method PromotionCartRuleEntity|null last()
 */
class PromotionCartRuleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionCartRuleEntity::class;
    }
}
