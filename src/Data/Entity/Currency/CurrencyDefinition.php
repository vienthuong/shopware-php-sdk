<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Currency;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'currency';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CurrencyEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CurrencyCollection::class;
    }
}
