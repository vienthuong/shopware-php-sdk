<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\OrderLineItem;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(OrderLineItemEntity $entity)
 * @method void                     set(OrderLineItemEntity $entity)
 * @method OrderLineItemEntity[]    getIterator()
 * @method OrderLineItemEntity[]    getElements()
 * @method OrderLineItemEntity|null get(string $key)
 * @method OrderLineItemEntity|null first()
 * @method OrderLineItemEntity|null last()
 */
class OrderLineItemCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return OrderLineItemEntity::class;
    }
}
