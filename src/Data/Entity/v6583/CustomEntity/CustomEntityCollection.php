<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\CustomEntity;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void              add(CustomEntity $entity)
 * @method void              set(CustomEntity $entity)
 * @method CustomEntity[]    getIterator()
 * @method CustomEntity[]    getElements()
 * @method CustomEntity|null get(string $key)
 * @method CustomEntity|null first()
 * @method CustomEntity|null last()
 */
class CustomEntityCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomEntity::class;
    }
}
