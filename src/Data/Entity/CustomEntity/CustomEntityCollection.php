<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CustomEntity;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CustomEntityEntity $entity)
 * @method void set(string $key, CustomEntityEntity $entity)
 * @method CustomEntityEntity[] getIterator()
 * @method CustomEntityEntity[] getElements()
 * @method CustomEntityEntity|null get(string $key)
 * @method CustomEntityEntity|null first()
 * @method CustomEntityEntity|null last()
 */
class CustomEntityCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomEntityEntity::class;
    }
}
