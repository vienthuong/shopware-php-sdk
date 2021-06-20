<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ScheduledTask;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ScheduledTaskDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'scheduled_task';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ScheduledTaskEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ScheduledTaskCollection::class;
    }
}
