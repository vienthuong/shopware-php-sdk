<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Theme;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'theme';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ThemeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ThemeCollection::class;
    }
}
