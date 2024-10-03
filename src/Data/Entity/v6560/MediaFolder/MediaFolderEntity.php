<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\MediaFolder;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Media\MediaCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\MediaDefaultFolder\MediaDefaultFolderEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\MediaFolderConfiguration\MediaFolderConfigurationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
