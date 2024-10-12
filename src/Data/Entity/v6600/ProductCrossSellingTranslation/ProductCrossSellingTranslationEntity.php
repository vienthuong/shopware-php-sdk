<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\ProductCrossSellingTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\ProductCrossSelling\ProductCrossSellingEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingTranslationEntity extends Entity
{
    public ?string $name = null;
    public ?string $productCrossSellingId = null;
    public ?string $languageId = null;
    public ?ProductCrossSellingEntity $productCrossSelling = null;
    public ?LanguageEntity $language = null;
}
