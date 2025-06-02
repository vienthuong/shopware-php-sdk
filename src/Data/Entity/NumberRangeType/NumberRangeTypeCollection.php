<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\NumberRangeType;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(NumberRangeTypeEntity $entity)
 * @method void set(string $key, NumberRangeTypeEntity $entity)
 * @method NumberRangeTypeEntity[] getIterator()
 * @method NumberRangeTypeEntity[] getElements()
 * @method NumberRangeTypeEntity|null get(string $key)
 * @method NumberRangeTypeEntity|null first()
 * @method NumberRangeTypeEntity|null last()
 */
class NumberRangeTypeCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return NumberRangeTypeEntity::class;
    }
}
