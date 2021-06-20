<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CurrencyTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'currency_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CurrencyTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CurrencyTranslationCollection::class;
    }
}
