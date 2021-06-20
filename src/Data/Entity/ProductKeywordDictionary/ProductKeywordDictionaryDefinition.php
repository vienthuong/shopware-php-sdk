<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductKeywordDictionary;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductKeywordDictionaryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_keyword_dictionary';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductKeywordDictionaryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductKeywordDictionaryCollection::class;
    }
}
