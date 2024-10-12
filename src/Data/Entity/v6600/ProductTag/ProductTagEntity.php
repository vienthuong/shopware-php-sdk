<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\ProductTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTagEntity extends Entity
{
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?string $tagId = null;
    public ?ProductEntity $product = null;
    public ?TagEntity $tag = null;
}
