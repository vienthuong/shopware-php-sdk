<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\ProductSortingTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\ProductSorting\ProductSortingEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $productSortingId = null;

    public ?string $languageId = null;

    public ?ProductSortingEntity $productSorting = null;

    public ?LanguageEntity $language = null;
}
