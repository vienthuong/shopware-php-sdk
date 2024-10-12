<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\PromotionDiscountRule;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\PromotionDiscount\PromotionDiscountEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountRuleEntity extends Entity
{
    public ?string $discountId = null;
    public ?string $ruleId = null;
    public ?PromotionDiscountEntity $discount = null;
    public ?RuleEntity $rule = null;
}
