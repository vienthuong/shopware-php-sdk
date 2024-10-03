<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\MediaFolderConfigurationMediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationMediaThumbnailSizeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_folder_configuration_media_thumbnail_size';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return MediaFolderConfigurationMediaThumbnailSizeEntity::class;
    }

    public function getEntityCollection(): string
    {
        return MediaFolderConfigurationMediaThumbnailSizeCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('media_folder_configuration_media_thumbnail_size', new PropertyCollection([
            new Property('mediaFolderConfigurationId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('mediaThumbnailSizeId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('mediaFolderConfiguration', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'media_folder_configuration',
                'referenceField' => 'id',
                'localField' => 'mediaFolderConfigurationId',
                'relation' => 'many_to_one',
            ]),
            new Property('mediaThumbnailSize', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'media_thumbnail_size',
                'referenceField' => 'id',
                'localField' => 'mediaThumbnailSizeId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
