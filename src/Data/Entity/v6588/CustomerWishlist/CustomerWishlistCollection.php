<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\CustomerWishlist;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                        add(CustomerWishlistEntity $entity)
 * @method void                        set(CustomerWishlistEntity $entity)
 * @method CustomerWishlistEntity[]    getIterator()
 * @method CustomerWishlistEntity[]    getElements()
 * @method CustomerWishlistEntity|null get(string $key)
 * @method CustomerWishlistEntity|null first()
 * @method CustomerWishlistEntity|null last()
 */
class CustomerWishlistCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomerWishlistEntity::class;
    }
}
