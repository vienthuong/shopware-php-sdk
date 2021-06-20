<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductCrossSelling;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_cross_selling';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductCrossSellingEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductCrossSellingCollection::class;
    }
}
