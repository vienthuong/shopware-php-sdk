<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\ProductStream;

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
class ProductStreamDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_stream';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductStreamEntity::class;
    }

    public function getEntityCollection(): string
    {
        return ProductStreamCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('product_stream', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('apiFilter', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('write_protected', [[]])]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('invalid', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('write_protected', [[]])]), []),
            new Property('name', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), new Flag('search_ranking', 500), new Flag('translatable', 1)]), []),
            new Property('description', 'text', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('translatable', 1)]), []),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('translatable', 1)]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('translations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1), new Flag('required', 1)]), [
                'entity' => 'product_stream_translation',
                'referenceField' => 'productStreamId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('filters', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_stream_filter',
                'referenceField' => 'productStreamId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productCrossSellings', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'product_cross_selling',
                'referenceField' => 'productStreamId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productExports', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'product_export',
                'referenceField' => 'productStreamId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('categories', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'category',
                'referenceField' => 'productStreamId',
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
