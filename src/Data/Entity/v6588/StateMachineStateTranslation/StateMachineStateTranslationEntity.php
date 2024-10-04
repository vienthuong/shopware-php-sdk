<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\StateMachineStateTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $stateMachineStateId = null;

    public ?string $languageId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?LanguageEntity $language = null;
}
