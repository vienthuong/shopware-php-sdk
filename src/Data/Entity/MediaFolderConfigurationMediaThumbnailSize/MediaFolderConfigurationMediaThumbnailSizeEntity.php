<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaFolderConfigurationMediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Vin\ShopwareSdk\Data\Entity\MediaThumbnailSize\MediaThumbnailSizeEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaFolderConfigurationMediaThumbnailSizeEntity extends Entity
{
    public ?string $mediaFolderConfigurationId = null;

    public ?string $mediaThumbnailSizeId = null;

    public ?MediaFolderConfigurationEntity $mediaFolderConfiguration = null;

    public ?MediaThumbnailSizeEntity $mediaThumbnailSize = null;
}
