<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PropertyGroupOptionTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupOptionTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'property_group_option_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PropertyGroupOptionTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PropertyGroupOptionTranslationCollection::class;
    }
}
