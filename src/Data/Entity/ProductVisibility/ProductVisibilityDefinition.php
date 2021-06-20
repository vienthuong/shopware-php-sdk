<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductVisibility;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductVisibilityDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_visibility';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductVisibilityEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductVisibilityCollection::class;
    }
}
