<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\OrderTransactionCaptureRefundPosition;

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
class OrderTransactionCaptureRefundPositionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_transaction_capture_refund_position';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return OrderTransactionCaptureRefundPositionEntity::class;
    }

    public function getEntityCollection(): string
    {
        return OrderTransactionCaptureRefundPositionCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('order_transaction_capture_refund_position', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('versionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('refundId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('refundVersionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('orderLineItemId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('orderLineItemVersionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('orderLineItem', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), [
                'entity' => 'order_line_item',
                'referenceField' => 'id',
                'localField' => 'orderLineItemId',
                'relation' => 'many_to_one',
            ]),
            new Property('orderTransactionCaptureRefund', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), [
                'entity' => 'order_transaction_capture_refund',
                'referenceField' => 'id',
                'relation' => 'many_to_one',
            ]),
            new Property('externalReference', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('reason', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('quantity', 'int', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('amount', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), [
                'properties' => json_decode('{"unitPrice":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"totalPrice":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"quantity":{"type":"int","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"calculatedTaxes":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"taxRules":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"referencePrice":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"listPrice":{"type":"json_object","properties":{"price":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"discount":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"percentage":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}},"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"regulationPrice":{"type":"json_object","properties":{"price":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}},"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}}', true),
            ]),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
        ]));
    }
}
