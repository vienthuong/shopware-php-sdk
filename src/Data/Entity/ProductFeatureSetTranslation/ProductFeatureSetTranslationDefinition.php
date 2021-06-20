<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductFeatureSetTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_feature_set_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductFeatureSetTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductFeatureSetTranslationCollection::class;
    }
}
