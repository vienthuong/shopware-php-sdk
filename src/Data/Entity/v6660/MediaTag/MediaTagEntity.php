<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\MediaTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTagEntity extends Entity
{
    public ?string $mediaId = null;
    public ?string $tagId = null;
    public ?MediaEntity $media = null;
    public ?TagEntity $tag = null;
}
