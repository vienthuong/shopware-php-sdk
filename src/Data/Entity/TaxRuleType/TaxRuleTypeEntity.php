<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\TaxRuleType;

use Vin\ShopwareSdk\Data\Entity\TaxRule\TaxRuleCollection;
use Vin\ShopwareSdk\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class TaxRuleTypeEntity extends Entity
{
    public ?string $technicalName = null;

    public ?int $position = null;

    public ?string $typeName = null;

    public ?TaxRuleCollection $rules = null;

    public ?TaxRuleTypeTranslationCollection $translations = null;
}
