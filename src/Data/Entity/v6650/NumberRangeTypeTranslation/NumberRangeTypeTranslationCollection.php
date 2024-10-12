<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\NumberRangeTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                  add(NumberRangeTypeTranslationEntity $entity)
 * @method void                                  set(NumberRangeTypeTranslationEntity $entity)
 * @method NumberRangeTypeTranslationEntity[]    getIterator()
 * @method NumberRangeTypeTranslationEntity[]    getElements()
 * @method NumberRangeTypeTranslationEntity|null get(string $key)
 * @method NumberRangeTypeTranslationEntity|null first()
 * @method NumberRangeTypeTranslationEntity|null last()
 */
class NumberRangeTypeTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return NumberRangeTypeTranslationEntity::class;
    }
}
