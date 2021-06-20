<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductFeatureSet;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_feature_set';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductFeatureSetEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductFeatureSetCollection::class;
    }
}
