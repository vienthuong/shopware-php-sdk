<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaFolder;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_folder';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaFolderEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaFolderCollection::class;
    }
}
