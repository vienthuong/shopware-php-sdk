<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\ProductCategory;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Category\CategoryEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCategoryEntity extends Entity
{
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?string $categoryId = null;
    public ?string $categoryVersionId = null;
    public ?ProductEntity $product = null;
    public ?CategoryEntity $category = null;
}
