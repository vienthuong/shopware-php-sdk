<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ProductFeatureSet;

use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductFeatureSetEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?array $features = null;

    public ?ProductCollection $products = null;

    public ?ProductFeatureSetTranslationCollection $translations = null;
}
