<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineStateTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'state_machine_state_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return StateMachineStateTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return StateMachineStateTranslationCollection::class;
    }
}
