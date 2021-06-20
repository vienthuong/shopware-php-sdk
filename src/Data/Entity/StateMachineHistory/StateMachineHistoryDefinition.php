<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineHistory;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineHistoryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'state_machine_history';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return StateMachineHistoryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return StateMachineHistoryCollection::class;
    }
}
