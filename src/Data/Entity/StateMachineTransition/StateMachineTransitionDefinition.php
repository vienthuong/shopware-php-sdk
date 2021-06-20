<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineTransition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTransitionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'state_machine_transition';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return StateMachineTransitionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return StateMachineTransitionCollection::class;
    }
}
