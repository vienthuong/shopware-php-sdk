<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MainCategory;

use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\Category\CategoryEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
