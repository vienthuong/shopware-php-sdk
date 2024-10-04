<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\MediaFolder;

use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\MediaDefaultFolder\MediaDefaultFolderEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaFolderEntity extends Entity
{
    public ?bool $useParentConfiguration = null;

    public ?string $configurationId = null;

    public ?string $defaultFolderId = null;

    public ?string $parentId = null;

    public ?MediaFolderEntity $parent = null;

    public ?MediaFolderCollection $children = null;

    public ?int $childCount = null;

    public ?string $path = null;

    public ?MediaCollection $media = null;

    public ?MediaDefaultFolderEntity $defaultFolder = null;

    public ?MediaFolderConfigurationEntity $configuration = null;

    public ?string $name = null;
}
