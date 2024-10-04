<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CustomerGroup;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CustomerGroupEntity $entity)
 * @method void set(CustomerGroupEntity $entity)
 * @method CustomerGroupEntity[] getIterator()
 * @method CustomerGroupEntity[] getElements()
 * @method CustomerGroupEntity|null get(string $key)
 * @method CustomerGroupEntity|null first()
 * @method CustomerGroupEntity|null last()
 */
class CustomerGroupCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomerGroupEntity::class;
    }
}
