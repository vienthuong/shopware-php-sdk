<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductManufacturer;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductManufacturerEntity $entity)
 * @method void set(ProductManufacturerEntity $entity)
 * @method ProductManufacturerEntity[] getIterator()
 * @method ProductManufacturerEntity[] getElements()
 * @method ProductManufacturerEntity|null get(string $key)
 * @method ProductManufacturerEntity|null first()
 * @method ProductManufacturerEntity|null last()
 */
class ProductManufacturerCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductManufacturerEntity::class;
    }
}
