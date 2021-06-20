<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelCurrency;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCurrencyDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_currency';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelCurrencyEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelCurrencyCollection::class;
    }
}
