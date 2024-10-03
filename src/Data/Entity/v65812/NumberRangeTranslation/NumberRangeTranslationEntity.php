<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\NumberRangeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\NumberRange\NumberRangeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $numberRangeId = null;

    public ?string $languageId = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?LanguageEntity $language = null;
}
