<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\ProductStream;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\Category\CategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\ProductCrossSelling\ProductCrossSellingCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\ProductExport\ProductExportCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\ProductStreamFilter\ProductStreamFilterCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\ProductStreamTranslation\ProductStreamTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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