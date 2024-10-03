<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\MediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\MediaFolderConfiguration\MediaFolderConfigurationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailSizeEntity extends Entity
{
    public ?int $width = null;

    public ?int $height = null;

    public ?MediaFolderConfigurationCollection $mediaFolderConfigurations = null;
}
