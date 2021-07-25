<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogBlogCategory;

use Vin\ShopwareSdk\Data\Entity\SasBlogEntries\SasBlogEntriesEntity;
use Vin\ShopwareSdk\Data\Entity\SasBlogCategory\SasBlogCategoryEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SasBlogBlogCategoryEntity extends Entity
{
    public ?string $blogId = null;

    public ?string $blogCategoryId = null;

    public ?string $sasBlogCategoryVersionId = null;

    public ?SasBlogEntriesEntity $blog = null;

    public ?SasBlogCategoryEntity $blogCategory = null;
}
