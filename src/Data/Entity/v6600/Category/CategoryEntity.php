<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\Category;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\CategoryTranslation\CategoryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\CmsPage\CmsPageEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\MainCategory\MainCategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\ProductStream\ProductStreamEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\SeoUrl\SeoUrlCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\Tag\TagCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
