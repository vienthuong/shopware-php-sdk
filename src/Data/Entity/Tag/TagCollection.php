<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Tag;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(TagEntity $entity)
 * @method void set(TagEntity $entity)
 * @method TagEntity[] getIterator()
 * @method TagEntity[] getElements()
 * @method TagEntity|null get(string $key)
 * @method TagEntity|null first()
 * @method TagEntity|null last()
 */
class TagCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return TagEntity::class;
    }
}
