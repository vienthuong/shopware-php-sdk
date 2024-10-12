<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ProductKeywordDictionary;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductKeywordDictionaryEntity extends Entity
{
    public ?string $languageId = null;
    public ?string $keyword = null;
    public ?string $reversed = null;
    public ?LanguageEntity $language = null;
}
