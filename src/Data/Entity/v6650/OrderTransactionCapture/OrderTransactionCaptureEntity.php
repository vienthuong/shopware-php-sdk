<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\OrderTransactionCapture;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderTransaction\OrderTransactionEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
