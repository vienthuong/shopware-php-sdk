<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\OrderTransactionCaptureRefundPosition;

use Vin\ShopwareSdk\Data\Entity\OrderLineItem\OrderLineItemEntity;
use Vin\ShopwareSdk\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class OrderTransactionCaptureRefundPositionEntity extends Entity
{
    public ?string $refundId = null;

    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?OrderLineItemEntity $orderLineItem = null;

    public ?OrderTransactionCaptureRefundEntity $orderTransactionCaptureRefund = null;

    public ?string $externalReference = null;

    public ?string $reason = null;

    public ?int $quantity = null;

    public ?array $amount = null;
}
