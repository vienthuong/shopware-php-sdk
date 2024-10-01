<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PromotionPersonaRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionPersonaRuleEntity $entity)
 * @method void set(PromotionPersonaRuleEntity $entity)
 * @method PromotionPersonaRuleEntity[] getIterator()
 * @method PromotionPersonaRuleEntity[] getElements()
 * @method PromotionPersonaRuleEntity|null get(string $key)
 * @method PromotionPersonaRuleEntity|null first()
 * @method PromotionPersonaRuleEntity|null last()
 */
class PromotionPersonaRuleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionPersonaRuleEntity::class;
    }
}
