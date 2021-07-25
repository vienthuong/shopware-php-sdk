<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductSorting;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductSortingEntity $entity)
 * @method void set(ProductSortingEntity $entity)
 * @method ProductSortingEntity[] getIterator()
 * @method ProductSortingEntity[] getElements()
 * @method ProductSortingEntity|null get(string $key)
 * @method ProductSortingEntity|null first()
 * @method ProductSortingEntity|null last()
 */
class ProductSortingCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductSortingEntity::class;
    }
}
