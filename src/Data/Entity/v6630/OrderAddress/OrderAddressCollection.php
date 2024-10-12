<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\OrderAddress;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                    add(OrderAddressEntity $entity)
 * @method void                    set(OrderAddressEntity $entity)
 * @method OrderAddressEntity[]    getIterator()
 * @method OrderAddressEntity[]    getElements()
 * @method OrderAddressEntity|null get(string $key)
 * @method OrderAddressEntity|null first()
 * @method OrderAddressEntity|null last()
 */
class OrderAddressCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return OrderAddressEntity::class;
    }
}
