<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\PromotionSetgroup;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Rule\RuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $packagerKey = null;

    public ?string $sorterKey = null;

    public ?float $value = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleCollection $setGroupRules = null;
}
