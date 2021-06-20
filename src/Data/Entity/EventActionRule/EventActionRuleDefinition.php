<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventActionRule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class EventActionRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'event_action_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return EventActionRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return EventActionRuleCollection::class;
    }
}
