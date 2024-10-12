<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\StateMachineStateTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                    add(StateMachineStateTranslationEntity $entity)
 * @method void                                    set(StateMachineStateTranslationEntity $entity)
 * @method StateMachineStateTranslationEntity[]    getIterator()
 * @method StateMachineStateTranslationEntity[]    getElements()
 * @method StateMachineStateTranslationEntity|null get(string $key)
 * @method StateMachineStateTranslationEntity|null first()
 * @method StateMachineStateTranslationEntity|null last()
 */
class StateMachineStateTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return StateMachineStateTranslationEntity::class;
    }
}
