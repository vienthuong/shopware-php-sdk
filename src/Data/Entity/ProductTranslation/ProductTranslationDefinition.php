<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductTranslationCollection::class;
    }
}
