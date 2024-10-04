<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CmsPageTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\CmsPage\CmsPageEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CmsPageTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $cmsPageId = null;

    public ?string $languageId = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?LanguageEntity $language = null;

    public ?string $cmsPageVersionId = null;
}
