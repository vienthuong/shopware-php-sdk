<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomField;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'custom_field';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomFieldEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomFieldCollection::class;
    }
}
