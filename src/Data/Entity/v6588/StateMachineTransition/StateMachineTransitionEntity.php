<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\StateMachineTransition;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\StateMachine\StateMachineEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTransitionEntity extends Entity
{
    public ?string $actionName = null;

    public ?string $stateMachineId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $fromStateId = null;

    public ?StateMachineStateEntity $fromStateMachineState = null;

    public ?string $toStateId = null;

    public ?StateMachineStateEntity $toStateMachineState = null;
}
