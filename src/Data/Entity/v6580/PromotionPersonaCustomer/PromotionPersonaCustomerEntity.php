<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\PromotionPersonaCustomer;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6580\Promotion\PromotionEntity;

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
