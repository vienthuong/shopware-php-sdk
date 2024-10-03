<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\CountryTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?array $addressFormat = null;

    public ?string $countryId = null;

    public ?string $languageId = null;

    public ?CountryEntity $country = null;

    public ?LanguageEntity $language = null;
}
