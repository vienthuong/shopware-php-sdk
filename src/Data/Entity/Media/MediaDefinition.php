<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Media;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaCollection::class;
    }
}
