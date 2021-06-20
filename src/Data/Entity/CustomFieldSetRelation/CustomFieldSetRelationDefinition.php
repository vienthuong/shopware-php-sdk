<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomFieldSetRelation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetRelationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'custom_field_set_relation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomFieldSetRelationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomFieldSetRelationCollection::class;
    }
}
