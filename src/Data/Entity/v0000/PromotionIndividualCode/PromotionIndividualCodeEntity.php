<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\PromotionIndividualCode;

use Vin\ShopwareSdk\Data\Entity\v0000\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionIndividualCodeEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $code = null;

    public ?array $payload = null;

    public ?PromotionEntity $promotion = null;
}
