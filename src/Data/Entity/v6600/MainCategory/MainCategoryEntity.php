<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\MainCategory;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Category\CategoryEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MainCategoryEntity extends Entity
{
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?string $categoryId = null;
    public ?string $categoryVersionId = null;
    public ?string $salesChannelId = null;
    public ?ProductEntity $product = null;
    public ?CategoryEntity $category = null;
    public ?SalesChannelEntity $salesChannel = null;
}
