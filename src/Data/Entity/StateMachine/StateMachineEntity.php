<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachine;

use Vin\ShopwareSdk\Data\Entity\StateMachineState\StateMachineStateCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineTransition\StateMachineTransitionCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
