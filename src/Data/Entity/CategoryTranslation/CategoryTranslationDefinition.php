<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CategoryTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'category_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CategoryTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CategoryTranslationCollection::class;
    }
}
