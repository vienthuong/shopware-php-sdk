<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MainCategory;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MainCategoryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'main_category';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MainCategoryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MainCategoryCollection::class;
    }
}
