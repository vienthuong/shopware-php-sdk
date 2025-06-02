<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\MediaTag;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaTagEntity $entity)
 * @method void set(string $key, MediaTagEntity $entity)
 * @method MediaTagEntity[] getIterator()
 * @method MediaTagEntity[] getElements()
 * @method MediaTagEntity|null get(string $key)
 * @method MediaTagEntity|null first()
 * @method MediaTagEntity|null last()
 */
class MediaTagCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MediaTagEntity::class;
    }
}
