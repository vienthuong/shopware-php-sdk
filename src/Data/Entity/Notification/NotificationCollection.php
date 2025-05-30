<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Notification;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(NotificationEntity $entity)
 * @method void set(string $key, NotificationEntity $entity)
 * @method NotificationEntity[] getIterator()
 * @method NotificationEntity[] getElements()
 * @method NotificationEntity|null get(string $key)
 * @method NotificationEntity|null first()
 * @method NotificationEntity|null last()
 */
class NotificationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return NotificationEntity::class;
    }
}
