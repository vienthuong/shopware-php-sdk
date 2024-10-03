<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\ProductCrossSelling;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(ProductCrossSellingEntity $entity)
 * @method void                           set(ProductCrossSellingEntity $entity)
 * @method ProductCrossSellingEntity[]    getIterator()
 * @method ProductCrossSellingEntity[]    getElements()
 * @method ProductCrossSellingEntity|null get(string $key)
 * @method ProductCrossSellingEntity|null first()
 * @method ProductCrossSellingEntity|null last()
 */
class ProductCrossSellingCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductCrossSellingEntity::class;
    }
}
