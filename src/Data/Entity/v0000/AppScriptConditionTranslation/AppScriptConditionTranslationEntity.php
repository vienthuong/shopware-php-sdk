<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\AppScriptConditionTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\AppScriptCondition\AppScriptConditionEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppScriptConditionTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $appScriptConditionId = null;

    public ?string $languageId = null;

    public ?AppScriptConditionEntity $appScriptCondition = null;

    public ?LanguageEntity $language = null;
}
