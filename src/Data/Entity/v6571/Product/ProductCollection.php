<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\Product;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void               add(ProductEntity $entity)
 * @method void               set(ProductEntity $entity)
 * @method ProductEntity[]    getIterator()
 * @method ProductEntity[]    getElements()
 * @method ProductEntity|null get(string $key)
 * @method ProductEntity|null first()
 * @method ProductEntity|null last()
 */
class ProductCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductEntity::class;
    }
}
