<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PropertyGroup;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'property_group';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PropertyGroupEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PropertyGroupCollection::class;
    }
}
