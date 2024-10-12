<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\TaxRuleType;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\TaxRule\TaxRuleCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleTypeEntity extends Entity
{
    public ?string $technicalName = null;
    public ?int $position = null;
    public ?string $typeName = null;
    public ?TaxRuleCollection $rules = null;
    public ?TaxRuleTypeTranslationCollection $translations = null;
}
