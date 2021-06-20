<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PropertyGroupTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'property_group_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PropertyGroupTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PropertyGroupTranslationCollection::class;
    }
}
