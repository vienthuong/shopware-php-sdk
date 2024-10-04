<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CountryTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CountryTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?array $addressFormat = null;

    public ?string $countryId = null;

    public ?string $languageId = null;

    public ?CountryEntity $country = null;

    public ?LanguageEntity $language = null;
}