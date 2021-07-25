<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductFeatureSet;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductFeatureSetEntity $entity)
 * @method void set(ProductFeatureSetEntity $entity)
 * @method ProductFeatureSetEntity[] getIterator()
 * @method ProductFeatureSetEntity[] getElements()
 * @method ProductFeatureSetEntity|null get(string $key)
 * @method ProductFeatureSetEntity|null first()
 * @method ProductFeatureSetEntity|null last()
 */
class ProductFeatureSetCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductFeatureSetEntity::class;
    }
}
