<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CustomerWishlistProduct;

use Vin\ShopwareSdk\Data\Entity\v0000\CustomerWishlist\CustomerWishlistEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomerWishlistProductEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $wishlistId = null;

    public ?CustomerWishlistEntity $wishlist = null;

    public ?ProductEntity $product = null;
}
