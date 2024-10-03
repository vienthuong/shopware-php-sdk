<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\PromotionDiscount;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\Rule\RuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $scope = null;

    public ?string $type = null;

    public ?float $value = null;

    public ?bool $considerAdvancedRules = null;

    public ?float $maxValue = null;

    public ?string $sorterKey = null;

    public ?string $applierKey = null;

    public ?string $usageKey = null;

    public ?string $pickerKey = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleCollection $discountRules = null;

    public ?PromotionDiscountPricesCollection $promotionDiscountPrices = null;
}
