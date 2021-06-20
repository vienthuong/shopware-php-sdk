<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineStateTranslation;

use Vin\ShopwareSdk\Data\Entity\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
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
