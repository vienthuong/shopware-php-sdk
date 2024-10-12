<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ProductCrossSellingAssignedProducts;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\ProductCrossSelling\ProductCrossSellingEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingAssignedProductsEntity extends Entity
{
    public ?string $crossSellingId = null;
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?ProductEntity $product = null;
    public ?ProductCrossSellingEntity $crossSelling = null;
    public ?int $position = null;
}
