<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\VersionCommit;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(VersionCommitEntity $entity)
 * @method void                     set(VersionCommitEntity $entity)
 * @method VersionCommitEntity[]    getIterator()
 * @method VersionCommitEntity[]    getElements()
 * @method VersionCommitEntity|null get(string $key)
 * @method VersionCommitEntity|null first()
 * @method VersionCommitEntity|null last()
 */
class VersionCommitCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return VersionCommitEntity::class;
    }
}
