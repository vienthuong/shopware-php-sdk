<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\CurrencyCountryRounding;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\Currency\CurrencyEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyCountryRoundingEntity extends Entity
{
    public ?string $currencyId = null;

    public ?string $countryId = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;

    public ?CurrencyEntity $currency = null;

    public ?CountryEntity $country = null;
}
