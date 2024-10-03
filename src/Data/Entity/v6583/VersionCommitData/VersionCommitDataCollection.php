<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\VersionCommitData;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                         add(VersionCommitDataEntity $entity)
 * @method void                         set(VersionCommitDataEntity $entity)
 * @method VersionCommitDataEntity[]    getIterator()
 * @method VersionCommitDataEntity[]    getElements()
 * @method VersionCommitDataEntity|null get(string $key)
 * @method VersionCommitDataEntity|null first()
 * @method VersionCommitDataEntity|null last()
 */
class VersionCommitDataCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return VersionCommitDataEntity::class;
    }
}
