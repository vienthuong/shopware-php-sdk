<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaThumbnail;

use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaThumbnailEntity extends Entity
{
    public ?string $mediaId = null;

    public ?int $width = null;

    public ?int $height = null;

    public ?string $url = null;

    public ?MediaEntity $media = null;
}
