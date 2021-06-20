<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductProperty;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductPropertyDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_property';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductPropertyEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductPropertyCollection::class;
    }
}
