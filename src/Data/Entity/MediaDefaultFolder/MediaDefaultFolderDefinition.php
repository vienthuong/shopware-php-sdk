<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaDefaultFolder;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaDefaultFolderDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_default_folder';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaDefaultFolderEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaDefaultFolderCollection::class;
    }
}
