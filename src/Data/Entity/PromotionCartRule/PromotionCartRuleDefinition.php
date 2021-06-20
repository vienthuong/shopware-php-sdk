<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionCartRule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionCartRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_cart_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionCartRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionCartRuleCollection::class;
    }
}
