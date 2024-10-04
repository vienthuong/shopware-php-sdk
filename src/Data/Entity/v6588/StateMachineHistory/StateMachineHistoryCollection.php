<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\StateMachineHistory;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(StateMachineHistoryEntity $entity)
 * @method void                           set(StateMachineHistoryEntity $entity)
 * @method StateMachineHistoryEntity[]    getIterator()
 * @method StateMachineHistoryEntity[]    getElements()
 * @method StateMachineHistoryEntity|null get(string $key)
 * @method StateMachineHistoryEntity|null first()
 * @method StateMachineHistoryEntity|null last()
 */
class StateMachineHistoryCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return StateMachineHistoryEntity::class;
    }
}
