<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ProductManufacturer;

use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
