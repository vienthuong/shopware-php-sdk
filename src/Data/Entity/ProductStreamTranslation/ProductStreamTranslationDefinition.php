<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductStreamTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_stream_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductStreamTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductStreamTranslationCollection::class;
    }
}
