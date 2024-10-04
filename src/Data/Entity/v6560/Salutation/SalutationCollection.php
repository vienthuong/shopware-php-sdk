<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Salutation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                  add(SalutationEntity $entity)
 * @method void                  set(SalutationEntity $entity)
 * @method SalutationEntity[]    getIterator()
 * @method SalutationEntity[]    getElements()
 * @method SalutationEntity|null get(string $key)
 * @method SalutationEntity|null first()
 * @method SalutationEntity|null last()
 */
class SalutationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SalutationEntity::class;
    }
}
