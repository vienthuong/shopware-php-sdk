<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\MediaTag;

use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Tag\TagEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaTagEntity extends Entity
{
    public ?string $mediaId = null;

    public ?string $tagId = null;

    public ?MediaEntity $media = null;

    public ?TagEntity $tag = null;
}
