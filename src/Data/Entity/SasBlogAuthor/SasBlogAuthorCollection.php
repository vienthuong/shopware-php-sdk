<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogAuthor;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SasBlogAuthorEntity $entity)
 * @method void set(SasBlogAuthorEntity $entity)
 * @method SasBlogAuthorEntity[] getIterator()
 * @method SasBlogAuthorEntity[] getElements()
 * @method SasBlogAuthorEntity|null get(string $key)
 * @method SasBlogAuthorEntity|null first()
 * @method SasBlogAuthorEntity|null last()
 */
class SasBlogAuthorCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SasBlogAuthorEntity::class;
    }
}
