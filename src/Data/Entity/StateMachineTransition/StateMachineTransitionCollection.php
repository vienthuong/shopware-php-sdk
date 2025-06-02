<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\StateMachineTransition;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(StateMachineTransitionEntity $entity)
 * @method void set(string $key, StateMachineTransitionEntity $entity)
 * @method StateMachineTransitionEntity[] getIterator()
 * @method StateMachineTransitionEntity[] getElements()
 * @method StateMachineTransitionEntity|null get(string $key)
 * @method StateMachineTransitionEntity|null first()
 * @method StateMachineTransitionEntity|null last()
 */
class StateMachineTransitionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return StateMachineTransitionEntity::class;
    }
}
