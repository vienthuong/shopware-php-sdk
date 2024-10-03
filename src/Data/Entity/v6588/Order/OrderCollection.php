<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\Order;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void             add(OrderEntity $entity)
 * @method void             set(OrderEntity $entity)
 * @method OrderEntity[]    getIterator()
 * @method OrderEntity[]    getElements()
 * @method OrderEntity|null get(string $key)
 * @method OrderEntity|null first()
 * @method OrderEntity|null last()
 */
class OrderCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return OrderEntity::class;
    }
}
