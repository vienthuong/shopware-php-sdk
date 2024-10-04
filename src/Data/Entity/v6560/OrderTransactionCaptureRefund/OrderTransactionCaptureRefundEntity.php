<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\OrderTransactionCaptureRefund;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\OrderTransactionCapture\OrderTransactionCaptureEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\OrderTransactionCaptureRefundPosition\OrderTransactionCaptureRefundPositionCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureRefundEntity extends Entity
{
    public ?string $captureId = null;

    public ?string $captureVersionId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderTransactionCaptureEntity $transactionCapture = null;

    public ?OrderTransactionCaptureRefundPositionCollection $positions = null;

    public ?string $externalReference = null;

    public ?string $reason = null;

    public ?array $amount = null;
}
