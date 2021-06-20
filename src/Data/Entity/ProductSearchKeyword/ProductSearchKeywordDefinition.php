<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductSearchKeyword;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchKeywordDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_search_keyword';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductSearchKeywordEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductSearchKeywordCollection::class;
    }
}
