<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\PromotionSetgroupRule;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\PromotionSetgroup\PromotionSetgroupEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupRuleEntity extends Entity
{
    public ?string $setgroupId = null;
    public ?string $ruleId = null;
    public ?PromotionSetgroupEntity $setgroup = null;
    public ?RuleEntity $rule = null;
}
