<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PromotionDiscount;

use Vin\ShopwareSdk\Data\Entity\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleCollection;
use Vin\ShopwareSdk\Data\Entity\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
