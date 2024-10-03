<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\ProductManufacturer;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerEntity extends Entity
{
    public ?string $mediaId = null;

    public ?string $link = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?MediaEntity $media = null;

    public ?ProductCollection $products = null;

    public ?ProductManufacturerTranslationCollection $translations = null;
}
