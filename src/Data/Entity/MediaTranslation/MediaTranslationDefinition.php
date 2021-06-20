<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaTranslationCollection::class;
    }
}
