<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\MainCategory;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                    add(MainCategoryEntity $entity)
 * @method void                    set(MainCategoryEntity $entity)
 * @method MainCategoryEntity[]    getIterator()
 * @method MainCategoryEntity[]    getElements()
 * @method MainCategoryEntity|null get(string $key)
 * @method MainCategoryEntity|null first()
 * @method MainCategoryEntity|null last()
 */
class MainCategoryCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MainCategoryEntity::class;
    }
}
