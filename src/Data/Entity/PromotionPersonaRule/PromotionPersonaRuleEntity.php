<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionPersonaRule;

use Vin\ShopwareSdk\Data\Entity\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionPersonaRuleEntity extends Entity
{
    public ?string $promotionId = null;

    public ?string $ruleId = null;

    public ?PromotionEntity $promotion = null;

    public ?RuleEntity $rule = null;
}
