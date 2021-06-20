<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductStream;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_stream';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductStreamEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductStreamCollection::class;
    }
}
