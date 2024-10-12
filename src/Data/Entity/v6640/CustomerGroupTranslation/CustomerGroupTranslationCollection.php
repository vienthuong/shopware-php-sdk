<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\CustomerGroupTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                add(CustomerGroupTranslationEntity $entity)
 * @method void                                set(CustomerGroupTranslationEntity $entity)
 * @method CustomerGroupTranslationEntity[]    getIterator()
 * @method CustomerGroupTranslationEntity[]    getElements()
 * @method CustomerGroupTranslationEntity|null get(string $key)
 * @method CustomerGroupTranslationEntity|null first()
 * @method CustomerGroupTranslationEntity|null last()
 */
class CustomerGroupTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomerGroupTranslationEntity::class;
    }
}
