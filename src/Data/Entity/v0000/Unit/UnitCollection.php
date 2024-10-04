<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\Unit;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(UnitEntity $entity)
 * @method void set(UnitEntity $entity)
 * @method UnitEntity[] getIterator()
 * @method UnitEntity[] getElements()
 * @method UnitEntity|null get(string $key)
 * @method UnitEntity|null first()
 * @method UnitEntity|null last()
 */
class UnitCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return UnitEntity::class;
    }
}
