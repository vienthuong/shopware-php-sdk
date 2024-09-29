<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\OrderTransactionCapture;

use Vin\ShopwareSdk\Data\Entity\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\OrderTransaction\OrderTransactionEntity;
use Vin\ShopwareSdk\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class OrderTransactionCaptureEntity extends Entity
{
    public ?string $orderTransactionId = null;

    public ?string $orderTransactionVersionId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderTransactionEntity $transaction = null;

    public ?OrderTransactionCaptureRefundCollection $refunds = null;

    public ?string $externalReference = null;

    public ?array $amount = null;
}
