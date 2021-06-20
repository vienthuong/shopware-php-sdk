<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductSearchConfigField;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchConfigFieldDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_search_config_field';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductSearchConfigFieldEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductSearchConfigFieldCollection::class;
    }
}
