<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\Category;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                add(CategoryEntity $entity)
 * @method void                set(CategoryEntity $entity)
 * @method CategoryEntity[]    getIterator()
 * @method CategoryEntity[]    getElements()
 * @method CategoryEntity|null get(string $key)
 * @method CategoryEntity|null first()
 * @method CategoryEntity|null last()
 */
class CategoryCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CategoryEntity::class;
    }
}
