<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaTagCollection::class;
    }
}
