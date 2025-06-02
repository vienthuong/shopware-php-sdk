<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\MediaThumbnailSize;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaThumbnailSizeEntity $entity)
 * @method void set(string $key, MediaThumbnailSizeEntity $entity)
 * @method MediaThumbnailSizeEntity[] getIterator()
 * @method MediaThumbnailSizeEntity[] getElements()
 * @method MediaThumbnailSizeEntity|null get(string $key)
 * @method MediaThumbnailSizeEntity|null first()
 * @method MediaThumbnailSizeEntity|null last()
 */
class MediaThumbnailSizeCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MediaThumbnailSizeEntity::class;
    }
}
