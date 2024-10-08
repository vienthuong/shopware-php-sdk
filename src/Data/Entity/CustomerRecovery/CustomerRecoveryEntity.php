<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerRecovery;

use Vin\ShopwareSdk\Data\Entity\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomerRecoveryEntity extends Entity
{
    public ?string $hash = null;

    public ?string $customerId = null;

    public ?CustomerEntity $customer = null;
}
