<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogEntriesTranslation;

use Vin\ShopwareSdk\Data\Entity\SasBlogEntries\SasBlogEntriesEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SasBlogEntriesTranslationEntity extends Entity
{
    public ?string $title = null;

    public ?string $slug = null;

    public ?string $teaser = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $content = null;

    public ?string $sasBlogEntriesId = null;

    public ?string $languageId = null;

    public ?SasBlogEntriesEntity $sasBlogEntries = null;

    public ?LanguageEntity $language = null;
}
