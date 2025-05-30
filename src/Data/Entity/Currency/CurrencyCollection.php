<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Currency;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CurrencyEntity $entity)
 * @method void set(string $key, CurrencyEntity $entity)
 * @method CurrencyEntity[] getIterator()
 * @method CurrencyEntity[] getElements()
 * @method CurrencyEntity|null get(string $key)
 * @method CurrencyEntity|null first()
 * @method CurrencyEntity|null last()
 */
class CurrencyCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CurrencyEntity::class;
    }
}
