<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionSetgroupRule;

use Vin\ShopwareSdk\Data\Entity\PromotionSetgroup\PromotionSetgroupEntity;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
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
