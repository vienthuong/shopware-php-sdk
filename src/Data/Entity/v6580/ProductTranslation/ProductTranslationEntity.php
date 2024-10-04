<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\ProductTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6580\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTranslationEntity extends Entity
{
    public ?string $metaDescription = null;

    public ?string $name = null;

    public ?string $keywords = null;

    public ?string $description = null;

    public ?string $metaTitle = null;

    public ?string $packUnit = null;

    public ?string $packUnitPlural = null;

    public ?array $customSearchKeywords = null;

    public ?array $slotConfig = null;

    public ?string $productId = null;

    public ?string $languageId = null;

    public ?ProductEntity $product = null;

    public ?LanguageEntity $language = null;

    public ?string $productVersionId = null;
}
