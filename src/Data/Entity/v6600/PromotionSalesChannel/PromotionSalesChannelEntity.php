<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\PromotionSalesChannel;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSalesChannelEntity extends Entity
{
    public ?string $promotionId = null;
    public ?string $salesChannelId = null;
    public ?int $priority = null;
    public ?PromotionEntity $promotion = null;
    public ?SalesChannelEntity $salesChannel = null;
}
