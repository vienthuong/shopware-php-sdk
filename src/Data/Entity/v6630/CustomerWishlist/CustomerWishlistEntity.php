<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\CustomerWishlist;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\CustomerWishlistProduct\CustomerWishlistProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6630\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistEntity extends Entity
{
    public ?string $customerId = null;
    public ?string $salesChannelId = null;
    public ?CustomerWishlistProductCollection $products = null;
    public ?CustomerEntity $customer = null;
    public ?SalesChannelEntity $salesChannel = null;
}
