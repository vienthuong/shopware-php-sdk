<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductExport;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductExportDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_export';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductExportEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductExportCollection::class;
    }
}
