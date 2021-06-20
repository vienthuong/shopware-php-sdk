<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionDiscountRule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_discount_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionDiscountRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionDiscountRuleCollection::class;
    }
}
