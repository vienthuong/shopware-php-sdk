<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductStreamFilter;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamFilterDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_stream_filter';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductStreamFilterEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductStreamFilterCollection::class;
    }
}
