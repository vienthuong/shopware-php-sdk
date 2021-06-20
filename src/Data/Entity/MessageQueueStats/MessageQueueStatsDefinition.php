<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MessageQueueStats;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MessageQueueStatsDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'message_queue_stats';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MessageQueueStatsEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MessageQueueStatsCollection::class;
    }
}
