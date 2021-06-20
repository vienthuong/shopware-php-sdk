<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductTagCollection::class;
    }
}
