<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductTag;

use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\Tag\TagEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductTagEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $tagId = null;

    public ?ProductEntity $product = null;

    public ?TagEntity $tag = null;
}
