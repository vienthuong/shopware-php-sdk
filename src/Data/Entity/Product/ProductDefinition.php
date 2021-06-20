<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Product;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductCollection::class;
    }
}
