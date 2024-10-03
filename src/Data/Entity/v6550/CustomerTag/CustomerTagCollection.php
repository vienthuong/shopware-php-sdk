<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\CustomerTag;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                   add(CustomerTagEntity $entity)
 * @method void                   set(CustomerTagEntity $entity)
 * @method CustomerTagEntity[]    getIterator()
 * @method CustomerTagEntity[]    getElements()
 * @method CustomerTagEntity|null get(string $key)
 * @method CustomerTagEntity|null first()
 * @method CustomerTagEntity|null last()
 */
class CustomerTagCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomerTagEntity::class;
    }
}
