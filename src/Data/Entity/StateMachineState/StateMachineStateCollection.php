<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineState;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(StateMachineStateEntity $entity)
 * @method void set(StateMachineStateEntity $entity)
 * @method StateMachineStateEntity[] getIterator()
 * @method StateMachineStateEntity[] getElements()
 * @method StateMachineStateEntity|null get(string $key)
 * @method StateMachineStateEntity|null first()
 * @method StateMachineStateEntity|null last()
 */
class StateMachineStateCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return StateMachineStateEntity::class;
    }
}
