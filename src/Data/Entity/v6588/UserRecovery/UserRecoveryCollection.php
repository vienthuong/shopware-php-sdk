<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\UserRecovery;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                    add(UserRecoveryEntity $entity)
 * @method void                    set(UserRecoveryEntity $entity)
 * @method UserRecoveryEntity[]    getIterator()
 * @method UserRecoveryEntity[]    getElements()
 * @method UserRecoveryEntity|null get(string $key)
 * @method UserRecoveryEntity|null first()
 * @method UserRecoveryEntity|null last()
 */
class UserRecoveryCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return UserRecoveryEntity::class;
    }
}
