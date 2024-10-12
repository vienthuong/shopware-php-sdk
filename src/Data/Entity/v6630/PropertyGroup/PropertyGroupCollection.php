<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\PropertyGroup;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(PropertyGroupEntity $entity)
 * @method void                     set(PropertyGroupEntity $entity)
 * @method PropertyGroupEntity[]    getIterator()
 * @method PropertyGroupEntity[]    getElements()
 * @method PropertyGroupEntity|null get(string $key)
 * @method PropertyGroupEntity|null first()
 * @method PropertyGroupEntity|null last()
 */
class PropertyGroupCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PropertyGroupEntity::class;
    }
}
