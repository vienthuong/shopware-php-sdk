<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\User;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void            add(UserEntity $entity)
 * @method void            set(UserEntity $entity)
 * @method UserEntity[]    getIterator()
 * @method UserEntity[]    getElements()
 * @method UserEntity|null get(string $key)
 * @method UserEntity|null first()
 * @method UserEntity|null last()
 */
class UserCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return UserEntity::class;
    }
}
