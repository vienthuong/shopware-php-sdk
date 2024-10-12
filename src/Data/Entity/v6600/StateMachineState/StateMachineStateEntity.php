<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\StateMachineState;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\OrderDelivery\OrderDeliveryCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\OrderTransaction\OrderTransactionCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\OrderTransactionCapture\OrderTransactionCaptureCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachine\StateMachineEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachineTransition\StateMachineTransitionCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateEntity extends Entity
{
    public ?string $technicalName = null;
    public ?string $name = null;
    public ?string $stateMachineId = null;
    public ?StateMachineEntity $stateMachine = null;
    public ?StateMachineTransitionCollection $fromStateMachineTransitions = null;
    public ?StateMachineTransitionCollection $toStateMachineTransitions = null;
    public ?StateMachineStateTranslationCollection $translations = null;
    public ?OrderTransactionCollection $orderTransactions = null;
    public ?OrderDeliveryCollection $orderDeliveries = null;
    public ?OrderCollection $orders = null;
    public ?OrderTransactionCaptureCollection $orderTransactionCaptures = null;
    public ?OrderTransactionCaptureRefundCollection $orderTransactionCaptureRefunds = null;
    public ?StateMachineHistoryCollection $toStateMachineHistoryEntries = null;
    public ?StateMachineHistoryCollection $fromStateMachineHistoryEntries = null;
}
