<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ProductFeatureSetTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\ProductFeatureSet\ProductFeatureSetEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetTranslationEntity extends Entity
{
    public ?string $name = null;
    public ?string $description = null;
    public ?string $productFeatureSetId = null;
    public ?string $languageId = null;
    public ?ProductFeatureSetEntity $productFeatureSet = null;
    public ?LanguageEntity $language = null;
}
