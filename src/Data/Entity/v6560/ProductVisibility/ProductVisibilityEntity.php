<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\ProductVisibility;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductVisibilityEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $salesChannelId = null;

    public ?int $visibility = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?ProductEntity $product = null;
}
