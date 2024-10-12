<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\CmsPageTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\CmsPage\CmsPageEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageTranslationEntity extends Entity
{
    public ?string $name = null;
    public ?string $cmsPageId = null;
    public ?string $languageId = null;
    public ?CmsPageEntity $cmsPage = null;
    public ?LanguageEntity $language = null;
    public ?string $cmsPageVersionId = null;
}
