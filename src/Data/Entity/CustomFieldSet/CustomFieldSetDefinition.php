<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomFieldSet;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'custom_field_set';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomFieldSetEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomFieldSetCollection::class;
    }
}
