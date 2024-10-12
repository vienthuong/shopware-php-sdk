<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\OrderAddress;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\CountryState\CountryStateEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Order\OrderEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderDelivery\OrderDeliveryCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderAddressEntity extends Entity
{
    public ?string $countryId = null;
    public ?string $countryStateId = null;
    public ?string $orderId = null;
    public ?string $orderVersionId = null;
    public ?string $salutationId = null;
    public ?string $firstName = null;
    public ?string $lastName = null;
    public ?string $street = null;
    public ?string $zipcode = null;
    public ?string $city = null;
    public ?string $company = null;
    public ?string $department = null;
    public ?string $title = null;
    public ?string $vatId = null;
    public ?string $phoneNumber = null;
    public ?string $additionalAddressLine1 = null;
    public ?string $additionalAddressLine2 = null;
    public ?CountryEntity $country = null;
    public ?CountryStateEntity $countryState = null;
    public ?OrderEntity $order = null;
    public ?OrderDeliveryCollection $orderDeliveries = null;
    public ?SalutationEntity $salutation = null;
}
