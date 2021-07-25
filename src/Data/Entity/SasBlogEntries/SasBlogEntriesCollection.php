<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogEntries;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SasBlogEntriesEntity $entity)
 * @method void set(SasBlogEntriesEntity $entity)
 * @method SasBlogEntriesEntity[] getIterator()
 * @method SasBlogEntriesEntity[] getElements()
 * @method SasBlogEntriesEntity|null get(string $key)
 * @method SasBlogEntriesEntity|null first()
 * @method SasBlogEntriesEntity|null last()
 */
class SasBlogEntriesCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SasBlogEntriesEntity::class;
    }
}
