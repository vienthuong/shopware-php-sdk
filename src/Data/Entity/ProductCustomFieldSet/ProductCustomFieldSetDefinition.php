<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductCustomFieldSet;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCustomFieldSetDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_custom_field_set';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductCustomFieldSetEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductCustomFieldSetCollection::class;
    }
}
