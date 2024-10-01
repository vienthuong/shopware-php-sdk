<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\OrderCustomer;

use Vin\ShopwareSdk\Data\Entity\Order\OrderEntity;
use Vin\ShopwareSdk\Data\Entity\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\Salutation\SalutationEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class OrderCustomerEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $email = null;

    public ?string $salutationId = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $company = null;

    public ?string $title = null;

    public ?array $vatIds = null;

    public ?string $customerNumber = null;

    public ?OrderEntity $order = null;

    public ?CustomerEntity $customer = null;

    public ?SalutationEntity $salutation = null;

    public ?string $remoteAddress = null;
}
