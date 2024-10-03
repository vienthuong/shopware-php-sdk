<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ProductStream;

use Vin\ShopwareSdk\Data\Entity\v0000\ProductStreamTranslation\ProductStreamTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductStreamFilter\ProductStreamFilterCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductCrossSelling\ProductCrossSellingCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductExport\ProductExportCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Category\CategoryCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductStreamEntity extends Entity
{
    public ?array $apiFilter = null;

    public ?bool $invalid = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?ProductStreamTranslationCollection $translations = null;

    public ?ProductStreamFilterCollection $filters = null;

    public ?ProductCrossSellingCollection $productCrossSellings = null;

    public ?ProductExportCollection $productExports = null;

    public ?CategoryCollection $categories = null;
}
