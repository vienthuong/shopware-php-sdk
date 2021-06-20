<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionOrderRule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionOrderRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_order_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionOrderRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionOrderRuleCollection::class;
    }
}
