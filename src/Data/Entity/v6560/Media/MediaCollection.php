<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Media;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void             add(MediaEntity $entity)
 * @method void             set(MediaEntity $entity)
 * @method MediaEntity[]    getIterator()
 * @method MediaEntity[]    getElements()
 * @method MediaEntity|null get(string $key)
 * @method MediaEntity|null first()
 * @method MediaEntity|null last()
 */
class MediaCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MediaEntity::class;
    }
}
