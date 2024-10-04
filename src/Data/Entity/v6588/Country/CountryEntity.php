<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\Country;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\CountryState\CountryStateCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\CountryTranslation\CountryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\CustomerAddress\CustomerAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\OrderAddress\OrderAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\TaxRule\TaxRuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryEntity extends Entity
{
    public ?string $name = null;

    public ?string $iso = null;

    public ?int $position = null;

    public ?bool $active = null;

    public ?bool $shippingAvailable = null;

    public ?string $iso3 = null;

    public ?bool $displayStateInRegistration = null;

    public ?bool $forceStateInRegistration = null;

    public ?bool $checkVatIdPattern = null;

    public ?bool $vatIdRequired = null;

    public ?string $vatIdPattern = null;

    public ?array $customerTax = null;

    public ?array $companyTax = null;

    public ?bool $postalCodeRequired = null;

    public ?bool $checkPostalCodePattern = null;

    public ?bool $checkAdvancedPostalCodePattern = null;

    public ?string $advancedPostalCodePattern = null;

    public ?array $addressFormat = null;

    public ?string $defaultPostalCodePattern = null;

    public ?CountryStateCollection $states = null;

    public ?CountryTranslationCollection $translations = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?OrderAddressCollection $orderAddresses = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?TaxRuleCollection $taxRules = null;

    public ?CurrencyCountryRoundingCollection $currencyCountryRoundings = null;
}
