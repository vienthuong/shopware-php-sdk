<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\PropertyGroupOptionTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                      add(PropertyGroupOptionTranslationEntity $entity)
 * @method void                                      set(PropertyGroupOptionTranslationEntity $entity)
 * @method PropertyGroupOptionTranslationEntity[]    getIterator()
 * @method PropertyGroupOptionTranslationEntity[]    getElements()
 * @method PropertyGroupOptionTranslationEntity|null get(string $key)
 * @method PropertyGroupOptionTranslationEntity|null first()
 * @method PropertyGroupOptionTranslationEntity|null last()
 */
class PropertyGroupOptionTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PropertyGroupOptionTranslationEntity::class;
    }
}
