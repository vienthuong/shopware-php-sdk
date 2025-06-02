<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductStream;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductStreamEntity $entity)
 * @method void set(string $key, ProductStreamEntity $entity)
 * @method ProductStreamEntity[] getIterator()
 * @method ProductStreamEntity[] getElements()
 * @method ProductStreamEntity|null get(string $key)
 * @method ProductStreamEntity|null first()
 * @method ProductStreamEntity|null last()
 */
class ProductStreamCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductStreamEntity::class;
    }
}
