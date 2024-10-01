<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PromotionSetgroup;

use Vin\ShopwareSdk\Data\Entity\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionSetgroupEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $packagerKey = null;

    public ?string $sorterKey = null;

    public ?float $value = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleCollection $setGroupRules = null;
}
