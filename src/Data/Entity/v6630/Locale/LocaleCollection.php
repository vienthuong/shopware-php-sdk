<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\Locale;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void              add(LocaleEntity $entity)
 * @method void              set(LocaleEntity $entity)
 * @method LocaleEntity[]    getIterator()
 * @method LocaleEntity[]    getElements()
 * @method LocaleEntity|null get(string $key)
 * @method LocaleEntity|null first()
 * @method LocaleEntity|null last()
 */
class LocaleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return LocaleEntity::class;
    }
}
