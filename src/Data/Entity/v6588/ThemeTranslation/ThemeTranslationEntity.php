<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\ThemeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?array $labels = null;

    public ?array $helpTexts = null;

    public ?string $themeId = null;

    public ?string $languageId = null;

    public ?ThemeEntity $theme = null;

    public ?LanguageEntity $language = null;
}
