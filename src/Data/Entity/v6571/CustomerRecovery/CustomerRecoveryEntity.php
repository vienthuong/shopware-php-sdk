<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\CustomerRecovery;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6571\Customer\CustomerEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerRecoveryEntity extends Entity
{
    public ?string $hash = null;

    public ?string $customerId = null;

    public ?CustomerEntity $customer = null;
}
