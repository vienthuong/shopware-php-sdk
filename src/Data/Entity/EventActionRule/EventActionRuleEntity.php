<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventActionRule;

use Vin\ShopwareSdk\Data\Entity\EventAction\EventActionEntity;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class EventActionRuleEntity extends Entity
{
    public ?string $eventActionId = null;

    public ?string $ruleId = null;

    public ?EventActionEntity $eventAction = null;

    public ?RuleEntity $rule = null;
}
