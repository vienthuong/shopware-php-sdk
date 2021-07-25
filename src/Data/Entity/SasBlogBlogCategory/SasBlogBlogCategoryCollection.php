<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogBlogCategory;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SasBlogBlogCategoryEntity $entity)
 * @method void set(SasBlogBlogCategoryEntity $entity)
 * @method SasBlogBlogCategoryEntity[] getIterator()
 * @method SasBlogBlogCategoryEntity[] getElements()
 * @method SasBlogBlogCategoryEntity|null get(string $key)
 * @method SasBlogBlogCategoryEntity|null first()
 * @method SasBlogBlogCategoryEntity|null last()
 */
class SasBlogBlogCategoryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SasBlogBlogCategoryEntity::class;
    }
}
