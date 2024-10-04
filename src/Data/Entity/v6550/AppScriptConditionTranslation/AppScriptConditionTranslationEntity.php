<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\AppScriptConditionTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\AppScriptCondition\AppScriptConditionEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppScriptConditionTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $appScriptConditionId = null;

    public ?string $languageId = null;

    public ?AppScriptConditionEntity $appScriptCondition = null;

    public ?LanguageEntity $language = null;
}
