<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ScheduledTask;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ScheduledTaskEntity $entity)
 * @method void set(string $key, ScheduledTaskEntity $entity)
 * @method ScheduledTaskEntity[] getIterator()
 * @method ScheduledTaskEntity[] getElements()
 * @method ScheduledTaskEntity|null get(string $key)
 * @method ScheduledTaskEntity|null first()
 * @method ScheduledTaskEntity|null last()
 */
class ScheduledTaskCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ScheduledTaskEntity::class;
    }
}
