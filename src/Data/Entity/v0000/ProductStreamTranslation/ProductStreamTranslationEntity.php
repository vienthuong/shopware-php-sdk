<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ProductStreamTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\ProductStream\ProductStreamEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductStreamTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $productStreamId = null;

    public ?string $languageId = null;

    public ?ProductStreamEntity $productStream = null;

    public ?LanguageEntity $language = null;
}
