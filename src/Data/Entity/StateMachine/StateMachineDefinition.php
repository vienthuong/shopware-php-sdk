<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachine;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'state_machine';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return StateMachineEntity::class;
    }

    public function getEntityCollection() : string
    {
        return StateMachineCollection::class;
    }
}
