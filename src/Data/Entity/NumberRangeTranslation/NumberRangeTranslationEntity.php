<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\NumberRangeTranslation;

use Vin\ShopwareSdk\Data\Entity\NumberRange\NumberRangeEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class NumberRangeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $numberRangeId = null;

    public ?string $languageId = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?LanguageEntity $language = null;
}
