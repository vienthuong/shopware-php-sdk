<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\NumberRangeTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\NumberRangeType\NumberRangeTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeTranslationEntity extends Entity
{
    public ?string $typeName = null;
    public ?string $numberRangeTypeId = null;
    public ?string $languageId = null;
    public ?NumberRangeTypeEntity $numberRangeType = null;
    public ?LanguageEntity $language = null;
}
