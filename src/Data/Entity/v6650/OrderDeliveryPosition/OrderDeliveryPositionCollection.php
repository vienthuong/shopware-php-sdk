<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\OrderDeliveryPosition;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                             add(OrderDeliveryPositionEntity $entity)
 * @method void                             set(OrderDeliveryPositionEntity $entity)
 * @method OrderDeliveryPositionEntity[]    getIterator()
 * @method OrderDeliveryPositionEntity[]    getElements()
 * @method OrderDeliveryPositionEntity|null get(string $key)
 * @method OrderDeliveryPositionEntity|null first()
 * @method OrderDeliveryPositionEntity|null last()
 */
class OrderDeliveryPositionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return OrderDeliveryPositionEntity::class;
    }
}
