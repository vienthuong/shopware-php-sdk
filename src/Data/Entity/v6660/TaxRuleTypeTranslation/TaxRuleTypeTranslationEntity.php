<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\TaxRuleTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\TaxRuleType\TaxRuleTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleTypeTranslationEntity extends Entity
{
    public ?string $typeName = null;
    public ?string $taxRuleTypeId = null;
    public ?string $languageId = null;
    public ?TaxRuleTypeEntity $taxRuleType = null;
    public ?LanguageEntity $language = null;
}
