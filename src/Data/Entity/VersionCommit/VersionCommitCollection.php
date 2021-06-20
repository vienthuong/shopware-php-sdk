<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\VersionCommit;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCommitCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return VersionCommitEntity::class;
    }
}
