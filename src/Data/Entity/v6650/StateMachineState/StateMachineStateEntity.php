<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\StateMachineState;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderDelivery\OrderDeliveryCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderTransaction\OrderTransactionCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderTransactionCapture\OrderTransactionCaptureCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachine\StateMachineEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachineTransition\StateMachineTransitionCollection;

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
