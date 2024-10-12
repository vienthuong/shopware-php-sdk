<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\MediaThumbnail;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailEntity extends Entity
{
    public ?string $mediaId = null;
    public ?int $width = null;
    public ?int $height = null;
    public ?string $url = null;
    public ?string $path = null;
    public ?MediaEntity $media = null;
}
