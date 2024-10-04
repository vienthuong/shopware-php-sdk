<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\ProductTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                          add(ProductTranslationEntity $entity)
 * @method void                          set(ProductTranslationEntity $entity)
 * @method ProductTranslationEntity[]    getIterator()
 * @method ProductTranslationEntity[]    getElements()
 * @method ProductTranslationEntity|null get(string $key)
 * @method ProductTranslationEntity|null first()
 * @method ProductTranslationEntity|null last()
 */
class ProductTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductTranslationEntity::class;
    }
}
