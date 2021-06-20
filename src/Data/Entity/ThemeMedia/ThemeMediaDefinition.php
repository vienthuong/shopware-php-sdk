<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ThemeMedia;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeMediaDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'theme_media';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ThemeMediaEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ThemeMediaCollection::class;
    }
}
