<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductManufacturerTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductManufacturerTranslationEntity $entity)
 * @method void set(ProductManufacturerTranslationEntity $entity)
 * @method ProductManufacturerTranslationEntity[] getIterator()
 * @method ProductManufacturerTranslationEntity[] getElements()
 * @method ProductManufacturerTranslationEntity|null get(string $key)
 * @method ProductManufacturerTranslationEntity|null first()
 * @method ProductManufacturerTranslationEntity|null last()
 */
class ProductManufacturerTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductManufacturerTranslationEntity::class;
    }
}
