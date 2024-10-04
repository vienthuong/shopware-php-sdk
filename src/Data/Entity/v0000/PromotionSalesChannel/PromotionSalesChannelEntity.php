<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\PromotionSalesChannel;

use Vin\ShopwareSdk\Data\Entity\v0000\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionSalesChannelEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $salesChannelId = null;

    public ?int $priority = null;

    public ?PromotionEntity $promotion = null;

    public ?SalesChannelEntity $salesChannel = null;
}
