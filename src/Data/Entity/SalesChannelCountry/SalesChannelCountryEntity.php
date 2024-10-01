<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalesChannelCountry;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalesChannelCountryEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $countryId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?CountryEntity $country = null;
}
