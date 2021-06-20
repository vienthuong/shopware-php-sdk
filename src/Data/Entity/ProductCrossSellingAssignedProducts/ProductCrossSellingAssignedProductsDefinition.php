<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductCrossSellingAssignedProducts;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingAssignedProductsDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_cross_selling_assigned_products';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductCrossSellingAssignedProductsEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductCrossSellingAssignedProductsCollection::class;
    }
}
