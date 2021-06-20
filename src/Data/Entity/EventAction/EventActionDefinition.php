<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventAction;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class EventActionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'event_action';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return EventActionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return EventActionCollection::class;
    }
}
