<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ProductKeywordDictionary;

use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductKeywordDictionaryEntity extends Entity
{
    public ?string $languageId = null;

    public ?string $keyword = null;

    public ?string $reversed = null;

    public ?LanguageEntity $language = null;
}
