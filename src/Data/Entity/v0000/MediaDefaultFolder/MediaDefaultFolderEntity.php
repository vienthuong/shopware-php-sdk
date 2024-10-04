<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\MediaDefaultFolder;

use Vin\ShopwareSdk\Data\Entity\v0000\MediaFolder\MediaFolderEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaDefaultFolderEntity extends Entity
{
    public ?array $associationFields = null;

    public ?string $entity = null;

    public ?MediaFolderEntity $folder = null;
}
