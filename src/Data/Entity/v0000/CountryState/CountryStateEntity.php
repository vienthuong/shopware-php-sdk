<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CountryState;

use Vin\ShopwareSdk\Data\Entity\v0000\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\CountryStateTranslation\CountryStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\CustomerAddress\CustomerAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\OrderAddress\OrderAddressCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CountryStateEntity extends Entity
{
    public ?string $countryId = null;

    public ?string $shortCode = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?bool $active = null;

    public ?CountryEntity $country = null;

    public ?CountryStateTranslationCollection $translations = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?OrderAddressCollection $orderAddresses = null;
}
