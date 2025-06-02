<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\TaxProvider;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(TaxProviderEntity $entity)
 * @method void set(string $key, TaxProviderEntity $entity)
 * @method TaxProviderEntity[] getIterator()
 * @method TaxProviderEntity[] getElements()
 * @method TaxProviderEntity|null get(string $key)
 * @method TaxProviderEntity|null first()
 * @method TaxProviderEntity|null last()
 */
class TaxProviderCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return TaxProviderEntity::class;
    }
}
