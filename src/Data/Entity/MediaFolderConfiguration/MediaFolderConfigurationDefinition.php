<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaFolderConfiguration;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_folder_configuration';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaFolderConfigurationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaFolderConfigurationCollection::class;
    }
}
