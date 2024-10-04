<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\OrderTransactionCaptureRefund;

use Vin\ShopwareSdk\Data\Entity\v0000\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\OrderTransactionCapture\OrderTransactionCaptureEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\OrderTransactionCaptureRefundPosition\OrderTransactionCaptureRefundPositionCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class OrderTransactionCaptureRefundEntity extends Entity
{
    public ?string $captureId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderTransactionCaptureEntity $transactionCapture = null;

    public ?OrderTransactionCaptureRefundPositionCollection $positions = null;

    public ?string $externalReference = null;

    public ?string $reason = null;

    public ?array $amount = null;
}