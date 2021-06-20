<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductPrice;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductPriceDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_price';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductPriceEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductPriceCollection::class;
    }
}
