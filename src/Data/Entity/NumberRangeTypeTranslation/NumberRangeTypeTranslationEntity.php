<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\NumberRangeTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\NumberRangeType\NumberRangeTypeEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class NumberRangeTypeTranslationEntity extends Entity
{
    public ?string $typeName = null;

    public ?string $numberRangeTypeId = null;

    public ?string $languageId = null;

    public ?NumberRangeTypeEntity $numberRangeType = null;

    public ?LanguageEntity $language = null;
}
