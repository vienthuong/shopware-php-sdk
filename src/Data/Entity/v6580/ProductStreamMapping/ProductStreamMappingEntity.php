<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\ProductStreamMapping;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6580\ProductStream\ProductStreamEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamMappingEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $productStreamId = null;

    public ?ProductEntity $product = null;

    public ?ProductStreamEntity $productStream = null;
}
