<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogEntries;

use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\SasBlogEntriesTranslation\SasBlogEntriesTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SasBlogCategory\SasBlogCategoryCollection;
use Vin\ShopwareSdk\Data\Entity\SasBlogAuthor\SasBlogAuthorEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SasBlogEntriesEntity extends Entity
{
    public ?bool $active = null;

    public ?bool $detailTeaserImage = null;

    public ?string $mediaId = null;

    public ?string $authorId = null;

    public ?MediaEntity $media = null;

    public ?string $title = null;

    public ?string $slug = null;

    public ?string $teaser = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $content = null;

    public ?\DateTimeInterface$publishedAt = null;

    public ?SasBlogEntriesTranslationCollection $translations = null;

    public ?SasBlogCategoryCollection $blogCategories = null;

    public ?SasBlogAuthorEntity $author = null;
}
