<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\CountryStateTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(CountryStateTranslationEntity $entity)
 * @method void                               set(CountryStateTranslationEntity $entity)
 * @method CountryStateTranslationEntity[]    getIterator()
 * @method CountryStateTranslationEntity[]    getElements()
 * @method CountryStateTranslationEntity|null get(string $key)
 * @method CountryStateTranslationEntity|null first()
 * @method CountryStateTranslationEntity|null last()
 */
class CountryStateTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CountryStateTranslationEntity::class;
    }
}
