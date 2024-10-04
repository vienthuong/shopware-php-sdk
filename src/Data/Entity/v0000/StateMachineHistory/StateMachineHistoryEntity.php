<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\StateMachineHistory;

use Vin\ShopwareSdk\Data\Entity\v0000\StateMachine\StateMachineEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class StateMachineHistoryEntity extends Entity
{
    public ?string $stateMachineId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $entityName = null;

    public ?array $entityId = null;

    public ?string $fromStateId = null;

    public ?StateMachineStateEntity $fromStateMachineState = null;

    public ?string $toStateId = null;

    public ?StateMachineStateEntity $toStateMachineState = null;

    public ?string $transitionActionName = null;

    public ?string $userId = null;

    public ?UserEntity $user = null;
}