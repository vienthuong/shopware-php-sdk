<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaDefaultFolder;

use Vin\ShopwareSdk\Data\Entity\MediaFolder\MediaFolderEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaDefaultFolderEntity extends Entity
{
    public ?array $associationFields = null;

    public ?string $entity = null;

    public ?MediaFolderEntity $folder = null;
}
