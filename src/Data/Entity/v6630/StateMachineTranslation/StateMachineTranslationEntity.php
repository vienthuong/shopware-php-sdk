<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\StateMachineTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\StateMachine\StateMachineEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTranslationEntity extends Entity
{
    public ?string $name = null;
    public ?string $stateMachineId = null;
    public ?string $languageId = null;
    public ?StateMachineEntity $stateMachine = null;
    public ?LanguageEntity $language = null;
}
