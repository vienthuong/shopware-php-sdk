<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Category;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'category';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CategoryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CategoryCollection::class;
    }
}
