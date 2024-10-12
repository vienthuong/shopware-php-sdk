<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\ProductFeatureSet;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetEntity extends Entity
{
    public ?string $name = null;
    public ?string $description = null;
    public ?array $features = null;
    public ?ProductCollection $products = null;
    public ?ProductFeatureSetTranslationCollection $translations = null;
}
