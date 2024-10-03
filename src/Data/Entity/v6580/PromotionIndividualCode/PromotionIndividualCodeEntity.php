<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\PromotionIndividualCode;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\Promotion\PromotionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionIndividualCodeEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $code = null;

    public ?array $payload = null;

    public ?PromotionEntity $promotion = null;
}
