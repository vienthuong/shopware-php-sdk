<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\LandingPageTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\LandingPage\LandingPageEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
