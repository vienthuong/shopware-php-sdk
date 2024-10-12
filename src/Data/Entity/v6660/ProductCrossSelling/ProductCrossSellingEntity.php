<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\ProductCrossSelling;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductStream\ProductStreamEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingEntity extends Entity
{
    public ?string $name = null;
    public ?int $position = null;
    public ?string $sortBy = null;
    public ?string $sortDirection = null;
    public ?string $type = null;
    public ?bool $active = null;
    public ?int $limit = null;
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?ProductEntity $product = null;
    public ?string $productStreamId = null;
    public ?ProductStreamEntity $productStream = null;
    public ?ProductCrossSellingAssignedProductsCollection $assignedProducts = null;
    public ?ProductCrossSellingTranslationCollection $translations = null;
}
