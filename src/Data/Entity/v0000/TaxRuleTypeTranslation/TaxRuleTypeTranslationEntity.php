<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\TaxRuleTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\TaxRuleType\TaxRuleTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class TaxRuleTypeTranslationEntity extends Entity
{
    public ?string $typeName = null;

    public ?string $taxRuleTypeId = null;

    public ?string $languageId = null;

    public ?TaxRuleTypeEntity $taxRuleType = null;

    public ?LanguageEntity $language = null;
}
