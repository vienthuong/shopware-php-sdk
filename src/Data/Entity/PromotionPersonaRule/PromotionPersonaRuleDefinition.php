<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionPersonaRule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionPersonaRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_persona_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionPersonaRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionPersonaRuleCollection::class;
    }
}
