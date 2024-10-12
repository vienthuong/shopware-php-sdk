<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\MediaFolderConfiguration;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                add(MediaFolderConfigurationEntity $entity)
 * @method void                                set(MediaFolderConfigurationEntity $entity)
 * @method MediaFolderConfigurationEntity[]    getIterator()
 * @method MediaFolderConfigurationEntity[]    getElements()
 * @method MediaFolderConfigurationEntity|null get(string $key)
 * @method MediaFolderConfigurationEntity|null first()
 * @method MediaFolderConfigurationEntity|null last()
 */
class MediaFolderConfigurationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MediaFolderConfigurationEntity::class;
    }
}
