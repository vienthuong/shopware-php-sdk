<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductProperty;

use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\PropertyGroupOption\PropertyGroupOptionEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductPropertyEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $optionId = null;

    public ?ProductEntity $product = null;

    public ?PropertyGroupOptionEntity $option = null;
}
