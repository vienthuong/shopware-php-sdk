<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ProductStreamTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\ProductStream\ProductStreamEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamTranslationEntity extends Entity
{
    public ?string $name = null;
    public ?string $description = null;
    public ?string $productStreamId = null;
    public ?string $languageId = null;
    public ?ProductStreamEntity $productStream = null;
    public ?LanguageEntity $language = null;
}
