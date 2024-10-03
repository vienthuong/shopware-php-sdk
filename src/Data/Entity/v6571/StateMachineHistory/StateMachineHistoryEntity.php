<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\StateMachineHistory;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6571\StateMachine\StateMachineEntity;
use Vin\ShopwareSdk\Data\Entity\v6571\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\v6571\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineHistoryEntity extends Entity
{
    public ?string $stateMachineId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $entityName = null;

    public ?string $fromStateId = null;

    public ?StateMachineStateEntity $fromStateMachineState = null;

    public ?string $toStateId = null;

    public ?StateMachineStateEntity $toStateMachineState = null;

    public ?string $transitionActionName = null;

    public ?string $userId = null;

    public ?UserEntity $user = null;

    public ?array $entityId = null;

    public ?string $referencedId = null;

    public ?string $referencedVersionId = null;
}
