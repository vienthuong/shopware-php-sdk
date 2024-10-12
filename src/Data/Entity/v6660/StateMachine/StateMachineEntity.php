<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\StateMachine;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\StateMachineState\StateMachineStateCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\StateMachineTransition\StateMachineTransitionCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\StateMachineTranslation\StateMachineTranslationCollection;

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
