<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\RuleCondition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleConditionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'rule_condition';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return RuleConditionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return RuleConditionCollection::class;
    }
}
