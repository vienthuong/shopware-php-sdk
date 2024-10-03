<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\Country;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CountryEntity $entity)
 * @method void set(CountryEntity $entity)
 * @method CountryEntity[] getIterator()
 * @method CountryEntity[] getElements()
 * @method CountryEntity|null get(string $key)
 * @method CountryEntity|null first()
 * @method CountryEntity|null last()
 */
class CountryCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CountryEntity::class;
    }
}
