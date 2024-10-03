<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\NumberRangeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                              add(NumberRangeTranslationEntity $entity)
 * @method void                              set(NumberRangeTranslationEntity $entity)
 * @method NumberRangeTranslationEntity[]    getIterator()
 * @method NumberRangeTranslationEntity[]    getElements()
 * @method NumberRangeTranslationEntity|null get(string $key)
 * @method NumberRangeTranslationEntity|null first()
 * @method NumberRangeTranslationEntity|null last()
 */
class NumberRangeTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return NumberRangeTranslationEntity::class;
    }
}
