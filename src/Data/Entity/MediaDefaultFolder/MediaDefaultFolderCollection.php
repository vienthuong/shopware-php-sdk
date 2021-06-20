<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaDefaultFolder;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaDefaultFolderCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MediaDefaultFolderEntity::class;
    }
}
