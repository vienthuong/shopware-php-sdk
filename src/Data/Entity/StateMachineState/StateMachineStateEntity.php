<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\StateMachineState;

use Vin\ShopwareSdk\Data\Entity\StateMachine\StateMachineEntity;
use Vin\ShopwareSdk\Data\Entity\StateMachineTransition\StateMachineTransitionCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\OrderTransaction\OrderTransactionCollection;
use Vin\ShopwareSdk\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use Vin\ShopwareSdk\Data\Entity\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\OrderTransactionCapture\OrderTransactionCaptureCollection;
use Vin\ShopwareSdk\Data\Entity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
