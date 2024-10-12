<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ProductStreamTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                add(ProductStreamTranslationEntity $entity)
 * @method void                                set(ProductStreamTranslationEntity $entity)
 * @method ProductStreamTranslationEntity[]    getIterator()
 * @method ProductStreamTranslationEntity[]    getElements()
 * @method ProductStreamTranslationEntity|null get(string $key)
 * @method ProductStreamTranslationEntity|null first()
 * @method ProductStreamTranslationEntity|null last()
 */
class ProductStreamTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductStreamTranslationEntity::class;
    }
}
