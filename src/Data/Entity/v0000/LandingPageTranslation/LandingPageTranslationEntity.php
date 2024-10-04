<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\LandingPageTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\LandingPage\LandingPageEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class LandingPageTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $url = null;

    public ?array $slotConfig = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $keywords = null;

    public ?string $landingPageId = null;

    public ?string $languageId = null;

    public ?LandingPageEntity $landingPage = null;

    public ?LanguageEntity $language = null;

    public ?string $landingPageVersionId = null;
}
