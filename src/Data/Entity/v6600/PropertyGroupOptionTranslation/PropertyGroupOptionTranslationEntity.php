<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\PropertyGroupOptionTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\PropertyGroupOption\PropertyGroupOptionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupOptionTranslationEntity extends Entity
{
    public ?string $name = null;
    public ?int $position = null;
    public ?string $propertyGroupOptionId = null;
    public ?string $languageId = null;
    public ?PropertyGroupOptionEntity $propertyGroupOption = null;
    public ?LanguageEntity $language = null;
}
