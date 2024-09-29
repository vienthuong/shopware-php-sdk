<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductCrossSellingAssignedProducts;

use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\ProductCrossSelling\ProductCrossSellingEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductCrossSellingAssignedProductsEntity extends Entity
{
    public ?string $crossSellingId = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?ProductEntity $product = null;

    public ?ProductCrossSellingEntity $crossSelling = null;

    public ?int $position = null;
}
