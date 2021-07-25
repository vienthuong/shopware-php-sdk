<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogCategory;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SasBlogCategoryEntity $entity)
 * @method void set(SasBlogCategoryEntity $entity)
 * @method SasBlogCategoryEntity[] getIterator()
 * @method SasBlogCategoryEntity[] getElements()
 * @method SasBlogCategoryEntity|null get(string $key)
 * @method SasBlogCategoryEntity|null first()
 * @method SasBlogCategoryEntity|null last()
 */
class SasBlogCategoryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SasBlogCategoryEntity::class;
    }
}
