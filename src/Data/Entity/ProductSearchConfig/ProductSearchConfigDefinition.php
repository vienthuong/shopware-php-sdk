<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductSearchConfig;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchConfigDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_search_config';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductSearchConfigEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductSearchConfigCollection::class;
    }
}
