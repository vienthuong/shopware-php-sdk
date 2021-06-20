<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductCrossSellingTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_cross_selling_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductCrossSellingTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductCrossSellingTranslationCollection::class;
    }
}
