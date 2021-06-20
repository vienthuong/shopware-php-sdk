<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductSorting;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_sorting';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductSortingEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductSortingCollection::class;
    }
}
