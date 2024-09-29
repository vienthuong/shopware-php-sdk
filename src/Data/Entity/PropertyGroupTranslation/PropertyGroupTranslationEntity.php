<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PropertyGroupTranslation;

use Vin\ShopwareSdk\Data\Entity\PropertyGroup\PropertyGroupEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
