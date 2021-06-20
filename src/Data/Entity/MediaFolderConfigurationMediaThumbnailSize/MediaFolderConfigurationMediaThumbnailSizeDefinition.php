<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaFolderConfigurationMediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationMediaThumbnailSizeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_folder_configuration_media_thumbnail_size';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaFolderConfigurationMediaThumbnailSizeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaFolderConfigurationMediaThumbnailSizeCollection::class;
    }
}
