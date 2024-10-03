<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\Tax;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void           add(TaxEntity $entity)
 * @method void           set(TaxEntity $entity)
 * @method TaxEntity[]    getIterator()
 * @method TaxEntity[]    getElements()
 * @method TaxEntity|null get(string $key)
 * @method TaxEntity|null first()
 * @method TaxEntity|null last()
 */
class TaxCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return TaxEntity::class;
    }
}
