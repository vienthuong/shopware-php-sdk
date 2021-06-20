<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionOrderRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionOrderRuleCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PromotionOrderRuleEntity::class;
    }
}
