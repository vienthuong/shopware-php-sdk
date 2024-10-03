<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\MediaFolderConfigurationMediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\MediaThumbnailSize\MediaThumbnailSizeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationMediaThumbnailSizeEntity extends Entity
{
    public ?string $mediaFolderConfigurationId = null;

    public ?string $mediaThumbnailSizeId = null;

    public ?MediaFolderConfigurationEntity $mediaFolderConfiguration = null;

    public ?MediaThumbnailSizeEntity $mediaThumbnailSize = null;
}
