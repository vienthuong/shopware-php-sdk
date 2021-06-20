<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductFeatureSetTranslation;

use Vin\ShopwareSdk\Data\Entity\ProductFeatureSet\ProductFeatureSetEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
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
