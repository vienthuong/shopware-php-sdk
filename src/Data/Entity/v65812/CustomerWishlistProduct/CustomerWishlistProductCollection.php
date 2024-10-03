<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\CustomerWishlistProduct;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(CustomerWishlistProductEntity $entity)
 * @method void                               set(CustomerWishlistProductEntity $entity)
 * @method CustomerWishlistProductEntity[]    getIterator()
 * @method CustomerWishlistProductEntity[]    getElements()
 * @method CustomerWishlistProductEntity|null get(string $key)
 * @method CustomerWishlistProductEntity|null first()
 * @method CustomerWishlistProductEntity|null last()
 */
class CustomerWishlistProductCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomerWishlistProductEntity::class;
    }
}
