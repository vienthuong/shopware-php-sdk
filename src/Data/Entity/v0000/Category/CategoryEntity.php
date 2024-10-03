<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\Category;

use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\CategoryTranslation\CategoryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\CmsPage\CmsPageEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductStream\ProductStreamEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\MainCategory\MainCategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\SeoUrl\SeoUrlCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CategoryEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $parentVersionId = null;

    public ?string $afterCategoryId = null;

    public ?string $afterCategoryVersionId = null;

    public ?string $mediaId = null;

    public ?bool $displayNestedProducts = null;

    public ?int $autoIncrement = null;

    public ?array $breadcrumb = null;

    public ?int $level = null;

    public ?string $path = null;

    public ?int $childCount = null;

    public ?string $type = null;

    public ?string $productAssignmentType = null;

    public ?bool $visible = null;

    public ?bool $active = null;

    public ?bool $cmsPageIdSwitched = null;

    public ?int $visibleChildCount = null;

    public ?string $name = null;

    public ?array $slotConfig = null;

    public ?string $linkType = null;

    public ?string $internalLink = null;

    public ?string $externalLink = null;

    public ?bool $linkNewTab = null;

    public ?string $description = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $keywords = null;

    public ?CategoryEntity $parent = null;

    public ?CategoryCollection $children = null;

    public ?MediaEntity $media = null;

    public ?CategoryTranslationCollection $translations = null;

    public ?ProductCollection $products = null;

    public ?ProductCollection $nestedProducts = null;

    public ?TagCollection $tags = null;

    public ?string $cmsPageId = null;

    public ?string $cmsPageVersionId = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?string $productStreamId = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $customEntityTypeId = null;

    public ?SalesChannelCollection $navigationSalesChannels = null;

    public ?SalesChannelCollection $footerSalesChannels = null;

    public ?SalesChannelCollection $serviceSalesChannels = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?SeoUrlCollection $seoUrls = null;
}
