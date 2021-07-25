<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogCategory;

use Vin\ShopwareSdk\Data\Entity\SasBlogCategoryTranslation\SasBlogCategoryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SasBlogEntries\SasBlogEntriesCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SasBlogCategoryEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $afterCategoryId = null;

    public ?int $level = null;

    public ?string $path = null;

    public ?int $childCount = null;

    public ?string $name = null;

    public ?SasBlogCategoryEntity $parent = null;

    public ?SasBlogCategoryCollection $children = null;

    public ?SasBlogCategoryTranslationCollection $translations = null;

    public ?SasBlogEntriesCollection $blogs = null;

    public ?SalesChannelCollection $navigationSalesChannels = null;

    public ?SalesChannelCollection $footerSalesChannels = null;

    public ?SalesChannelCollection $serviceSalesChannels = null;
}
