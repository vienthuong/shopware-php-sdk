<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\StateMachine;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachineState\StateMachineStateCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachineTransition\StateMachineTransitionCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\StateMachineTranslation\StateMachineTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineEntity extends Entity
{
    public ?string $technicalName = null;
    public ?string $name = null;
    public ?StateMachineStateCollection $states = null;
    public ?StateMachineTransitionCollection $transitions = null;
    public ?string $initialStateId = null;
    public ?StateMachineTranslationCollection $translations = null;
    public ?StateMachineHistoryCollection $historyEntries = null;
}