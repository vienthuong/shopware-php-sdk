<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Version;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return VersionEntity::class;
    }
}
