<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\TaxProviderTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\TaxProvider\TaxProviderEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class TaxProviderTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $taxProviderId = null;

    public ?string $languageId = null;

    public ?TaxProviderEntity $taxProvider = null;

    public ?LanguageEntity $language = null;
}
