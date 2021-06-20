<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailSizeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_thumbnail_size';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaThumbnailSizeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaThumbnailSizeCollection::class;
    }
}
