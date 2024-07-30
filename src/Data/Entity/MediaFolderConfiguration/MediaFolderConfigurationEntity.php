<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaFolderConfiguration;

use Vin\ShopwareSdk\Data\Entity\MediaFolder\MediaFolderCollection;
use Vin\ShopwareSdk\Data\Entity\MediaThumbnailSize\MediaThumbnailSizeCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
