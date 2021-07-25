<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MessageQueueStats;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MessageQueueStatsEntity $entity)
 * @method void set(MessageQueueStatsEntity $entity)
 * @method MessageQueueStatsEntity[] getIterator()
 * @method MessageQueueStatsEntity[] getElements()
 * @method MessageQueueStatsEntity|null get(string $key)
 * @method MessageQueueStatsEntity|null first()
 * @method MessageQueueStatsEntity|null last()
 */
class MessageQueueStatsCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MessageQueueStatsEntity::class;
    }
}
