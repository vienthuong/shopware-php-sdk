<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\MediaFolderConfiguration;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6571\MediaFolder\MediaFolderCollection;
use Vin\ShopwareSdk\Data\Entity\v6571\MediaThumbnailSize\MediaThumbnailSizeCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationEntity extends Entity
{
    public ?bool $createThumbnails = null;

    public ?bool $keepAspectRatio = null;

    public ?int $thumbnailQuality = null;

    public ?bool $private = null;

    public ?bool $noAssociation = null;

    public ?MediaFolderCollection $mediaFolders = null;

    public ?MediaThumbnailSizeCollection $mediaThumbnailSizes = null;

    public ?string $mediaThumbnailSizesRo = null;
}
