<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CategoryTag;

use Vin\ShopwareSdk\Data\Entity\v0000\Category\CategoryEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Tag\TagEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CategoryTagEntity extends Entity
{
    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?string $tagId = null;

    public ?CategoryEntity $category = null;

    public ?TagEntity $tag = null;
}
