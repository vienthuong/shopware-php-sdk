<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerWishlist;

use Vin\ShopwareSdk\Data\Entity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use Vin\ShopwareSdk\Data\Entity\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomerWishlistEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $salesChannelId = null;

    public ?CustomerWishlistProductCollection $products = null;

    public ?CustomerEntity $customer = null;

    public ?SalesChannelEntity $salesChannel = null;
}
