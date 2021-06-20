<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductSortingTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_sorting_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductSortingTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductSortingTranslationCollection::class;
    }
}
