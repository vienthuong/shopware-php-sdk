<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\UnitTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Unit\UnitEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UnitTranslationEntity extends Entity
{
    public ?string $shortCode = null;
    public ?string $name = null;
    public ?string $unitId = null;
    public ?string $languageId = null;
    public ?UnitEntity $unit = null;
    public ?LanguageEntity $language = null;
}
