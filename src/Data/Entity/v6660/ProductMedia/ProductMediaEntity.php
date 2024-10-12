<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\ProductMedia;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductMediaEntity extends Entity
{
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?string $mediaId = null;
    public ?int $position = null;
    public ?ProductEntity $product = null;
    public ?MediaEntity $media = null;
    public ?ProductCollection $coverProducts = null;
}
