<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PropertyGroupTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PropertyGroupTranslationEntity $entity)
 * @method void set(PropertyGroupTranslationEntity $entity)
 * @method PropertyGroupTranslationEntity[] getIterator()
 * @method PropertyGroupTranslationEntity[] getElements()
 * @method PropertyGroupTranslationEntity|null get(string $key)
 * @method PropertyGroupTranslationEntity|null first()
 * @method PropertyGroupTranslationEntity|null last()
 */
class PropertyGroupTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PropertyGroupTranslationEntity::class;
    }
}
