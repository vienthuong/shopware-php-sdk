<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductCategoryTree;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCategoryTreeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_category_tree';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductCategoryTreeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductCategoryTreeCollection::class;
    }
}
