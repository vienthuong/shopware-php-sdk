<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\MediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\MediaFolderConfiguration\MediaFolderConfigurationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaThumbnailSizeEntity extends Entity
{
    public ?int $width = null;

    public ?int $height = null;

    public ?MediaFolderConfigurationCollection $mediaFolderConfigurations = null;
}
