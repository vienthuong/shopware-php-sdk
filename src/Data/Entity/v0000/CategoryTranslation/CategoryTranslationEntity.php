<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CategoryTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\Category\CategoryEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CategoryTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?array $breadcrumb = null;

    public ?array $slotConfig = null;

    public ?string $linkType = null;

    public ?string $internalLink = null;

    public ?string $externalLink = null;

    public ?bool $linkNewTab = null;

    public ?string $description = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $keywords = null;

    public ?string $categoryId = null;

    public ?string $languageId = null;

    public ?CategoryEntity $category = null;

    public ?LanguageEntity $language = null;

    public ?string $categoryVersionId = null;
}
