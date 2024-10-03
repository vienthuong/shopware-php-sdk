<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\CurrencyTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(CurrencyTranslationEntity $entity)
 * @method void                           set(CurrencyTranslationEntity $entity)
 * @method CurrencyTranslationEntity[]    getIterator()
 * @method CurrencyTranslationEntity[]    getElements()
 * @method CurrencyTranslationEntity|null get(string $key)
 * @method CurrencyTranslationEntity|null first()
 * @method CurrencyTranslationEntity|null last()
 */
class CurrencyTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CurrencyTranslationEntity::class;
    }
}
