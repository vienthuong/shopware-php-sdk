<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\StateMachineTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\StateMachine\StateMachineEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class StateMachineTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $stateMachineId = null;

    public ?string $languageId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?LanguageEntity $language = null;
}
