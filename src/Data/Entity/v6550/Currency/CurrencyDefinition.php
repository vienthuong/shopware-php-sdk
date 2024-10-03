<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\Currency;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'currency';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return CurrencyEntity::class;
    }

    public function getEntityCollection(): string
    {
        return CurrencyCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('currency', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('factor', 'float', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('symbol', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('isoCode', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('shortName', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), new Flag('search_ranking', 250), new Flag('translatable', 1)]), []),
            new Property('name', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), new Flag('search_ranking', 500), new Flag('translatable', 1)]), []),
            new Property('position', 'int', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('isSystemDefault', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('runtime', 1)]), []),
            new Property('taxFreeFrom', 'float', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('translatable', 1)]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('translations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1), new Flag('required', 1)]), [
                'entity' => 'currency_translation',
                'referenceField' => 'currencyId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salesChannelDefaultAssignments', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'sales_channel',
                'referenceField' => 'currencyId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('orders', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'order',
                'referenceField' => 'currencyId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salesChannels', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'sales_channel',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('salesChannelDomains', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'sales_channel_domain',
                'referenceField' => 'currencyId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('promotionDiscountPrices', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'promotion_discount_prices',
                'referenceField' => 'currencyId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productExports', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'product_export',
                'referenceField' => 'currencyId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('itemRounding', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), [
                'properties' => json_decode('{"decimals":{"type":"int","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"interval":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"roundForNet":{"type":"boolean","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}}', true),
            ]),
            new Property('totalRounding', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), [
                'properties' => json_decode('{"decimals":{"type":"int","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"interval":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"roundForNet":{"type":"boolean","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}}', true),
            ]),
            new Property('countryRoundings', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'currency_country_rounding',
                'referenceField' => 'currencyId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('translated', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('computed', 1), new Flag('runtime', 1)]), [
                'properties' => json_decode('[]', true),
            ]),
        ]));
    }
}
