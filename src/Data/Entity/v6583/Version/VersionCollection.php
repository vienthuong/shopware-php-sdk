<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\Version;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void               add(VersionEntity $entity)
 * @method void               set(VersionEntity $entity)
 * @method VersionEntity[]    getIterator()
 * @method VersionEntity[]    getElements()
 * @method VersionEntity|null get(string $key)
 * @method VersionEntity|null first()
 * @method VersionEntity|null last()
 */
class VersionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return VersionEntity::class;
    }
}
