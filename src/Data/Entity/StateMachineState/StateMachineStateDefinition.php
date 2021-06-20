<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineState;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'state_machine_state';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return StateMachineStateEntity::class;
    }

    public function getEntityCollection() : string
    {
        return StateMachineStateCollection::class;
    }
}
