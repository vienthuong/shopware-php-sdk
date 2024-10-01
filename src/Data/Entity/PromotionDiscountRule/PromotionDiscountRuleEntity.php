<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PromotionDiscountRule;

use Vin\ShopwareSdk\Data\Entity\PromotionDiscount\PromotionDiscountEntity;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionDiscountRuleEntity extends Entity
{
    public ?string $discountId = null;

    public ?string $ruleId = null;

    public ?PromotionDiscountEntity $discount = null;

    public ?RuleEntity $rule = null;
}
