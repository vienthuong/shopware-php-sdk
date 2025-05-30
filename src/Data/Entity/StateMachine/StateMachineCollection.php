<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\StateMachine;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(StateMachineEntity $entity)
 * @method void set(string $key, StateMachineEntity $entity)
 * @method StateMachineEntity[] getIterator()
 * @method StateMachineEntity[] getElements()
 * @method StateMachineEntity|null get(string $key)
 * @method StateMachineEntity|null first()
 * @method StateMachineEntity|null last()
 */
class StateMachineCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return StateMachineEntity::class;
    }
}
