<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductOption;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductOptionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_option';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductOptionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductOptionCollection::class;
    }
}
