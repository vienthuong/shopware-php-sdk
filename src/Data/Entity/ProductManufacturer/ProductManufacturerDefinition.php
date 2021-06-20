<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductManufacturer;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_manufacturer';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductManufacturerEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductManufacturerCollection::class;
    }
}
