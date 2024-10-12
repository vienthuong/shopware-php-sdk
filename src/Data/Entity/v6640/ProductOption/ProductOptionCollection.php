<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ProductOption;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(ProductOptionEntity $entity)
 * @method void                     set(ProductOptionEntity $entity)
 * @method ProductOptionEntity[]    getIterator()
 * @method ProductOptionEntity[]    getElements()
 * @method ProductOptionEntity|null get(string $key)
 * @method ProductOptionEntity|null first()
 * @method ProductOptionEntity|null last()
 */
class ProductOptionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductOptionEntity::class;
    }
}
