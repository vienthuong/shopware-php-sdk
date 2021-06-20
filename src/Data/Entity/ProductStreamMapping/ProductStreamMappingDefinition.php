<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductStreamMapping;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamMappingDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_stream_mapping';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductStreamMappingEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductStreamMappingCollection::class;
    }
}
