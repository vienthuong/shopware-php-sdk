<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\MediaFolder;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                   add(MediaFolderEntity $entity)
 * @method void                   set(MediaFolderEntity $entity)
 * @method MediaFolderEntity[]    getIterator()
 * @method MediaFolderEntity[]    getElements()
 * @method MediaFolderEntity|null get(string $key)
 * @method MediaFolderEntity|null first()
 * @method MediaFolderEntity|null last()
 */
class MediaFolderCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MediaFolderEntity::class;
    }
}
