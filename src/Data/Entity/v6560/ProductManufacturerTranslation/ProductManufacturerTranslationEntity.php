<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\ProductManufacturerTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\ProductManufacturer\ProductManufacturerEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $productManufacturerId = null;

    public ?string $languageId = null;

    public ?ProductManufacturerEntity $productManufacturer = null;

    public ?LanguageEntity $language = null;

    public ?string $productManufacturerVersionId = null;
}
