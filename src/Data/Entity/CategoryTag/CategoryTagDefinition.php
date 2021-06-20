<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CategoryTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'category_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CategoryTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CategoryTagCollection::class;
    }
}
