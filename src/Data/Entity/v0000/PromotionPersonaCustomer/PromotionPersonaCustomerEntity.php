<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\PromotionPersonaCustomer;

use Vin\ShopwareSdk\Data\Entity\v0000\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionPersonaCustomerEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $customerId = null;

    public ?PromotionEntity $promotion = null;

    public ?CustomerEntity $customer = null;
}