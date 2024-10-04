<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\OrderTransaction;

use Vin\ShopwareSdk\Data\Entity\v0000\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Order\OrderEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\PaymentMethod\PaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\OrderTransactionCapture\OrderTransactionCaptureCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class OrderTransactionEntity extends Entity
{
    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $paymentMethodId = null;

    public ?array $amount = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderEntity $order = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?OrderTransactionCaptureCollection $captures = null;
}
