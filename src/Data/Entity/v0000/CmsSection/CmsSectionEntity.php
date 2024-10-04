<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CmsSection;

use Vin\ShopwareSdk\Data\Entity\v0000\CmsPage\CmsPageEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\CmsBlock\CmsBlockCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CmsSectionEntity extends Entity
{
    public ?int $position = null;

    public ?string $type = null;

    public ?bool $locked = null;

    public ?string $name = null;

    public ?string $sizingMode = null;

    public ?string $mobileBehavior = null;

    public ?string $backgroundColor = null;

    public ?string $backgroundMediaId = null;

    public ?string $backgroundMediaMode = null;

    public ?string $cssClass = null;

    public ?string $pageId = null;

    public ?array $visibility = null;

    public ?CmsPageEntity $page = null;

    public ?MediaEntity $backgroundMedia = null;

    public ?CmsBlockCollection $blocks = null;

    public ?string $cmsPageVersionId = null;
}
