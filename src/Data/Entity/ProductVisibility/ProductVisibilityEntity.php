<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductVisibility;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductVisibilityEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $salesChannelId = null;

    public ?int $visibility = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?ProductEntity $product = null;
}
