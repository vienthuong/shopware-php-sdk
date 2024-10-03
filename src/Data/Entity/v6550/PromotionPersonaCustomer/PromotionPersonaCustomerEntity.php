<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\PromotionPersonaCustomer;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\Promotion\PromotionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionPersonaCustomerEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $customerId = null;

    public ?PromotionEntity $promotion = null;

    public ?CustomerEntity $customer = null;
}
