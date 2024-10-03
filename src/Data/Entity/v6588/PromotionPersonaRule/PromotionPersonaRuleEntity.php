<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\PromotionPersonaRule;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionPersonaRuleEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $ruleId = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleEntity $rule = null;
}
