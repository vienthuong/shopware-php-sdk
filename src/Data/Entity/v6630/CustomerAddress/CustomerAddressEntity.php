<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\CustomerAddress;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\CountryState\CountryStateEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerAddressEntity extends Entity
{
    public ?string $customerId = null;
    public ?string $countryId = null;
    public ?string $countryStateId = null;
    public ?string $salutationId = null;
    public ?string $firstName = null;
    public ?string $lastName = null;
    public ?string $zipcode = null;
    public ?string $city = null;
    public ?string $company = null;
    public ?string $street = null;
    public ?string $department = null;
    public ?string $title = null;
    public ?string $phoneNumber = null;
    public ?string $additionalAddressLine1 = null;
    public ?string $additionalAddressLine2 = null;
    public ?CustomerEntity $customer = null;
    public ?CountryEntity $country = null;
    public ?CountryStateEntity $countryState = null;
    public ?SalutationEntity $salutation = null;
}
