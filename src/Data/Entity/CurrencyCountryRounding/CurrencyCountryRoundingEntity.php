<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CurrencyCountryRounding;

use Vin\ShopwareSdk\Data\Entity\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CurrencyCountryRoundingEntity extends Entity
{
    public ?string $currencyId = null;

    public ?string $countryId = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;

    public ?CurrencyEntity $currency = null;

    public ?CountryEntity $country = null;
}
