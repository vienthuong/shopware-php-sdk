<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppScriptCondition;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\RuleCondition\RuleConditionCollection;
use Vin\ShopwareSdk\Data\Entity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppScriptConditionEntity extends Entity
{
    public ?string $identifier = null;

    public ?string $name = null;

    public ?bool $active = null;

    public ?string $group = null;

    public ?string $script = null;

    public ?string $constraints = null;

    public ?array $config = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;

    public ?RuleConditionCollection $ruleConditions = null;

    public ?AppScriptConditionTranslationCollection $translations = null;
}
