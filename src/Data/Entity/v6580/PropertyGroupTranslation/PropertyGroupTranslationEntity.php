<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\PropertyGroupTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6580\PropertyGroup\PropertyGroupEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?int $position = null;

    public ?string $propertyGroupId = null;

    public ?string $languageId = null;

    public ?PropertyGroupEntity $propertyGroup = null;

    public ?LanguageEntity $language = null;
}
