<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CountryStateTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\CountryState\CountryStateEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CountryStateTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $countryStateId = null;

    public ?string $languageId = null;

    public ?CountryStateEntity $countryState = null;

    public ?LanguageEntity $language = null;
}
