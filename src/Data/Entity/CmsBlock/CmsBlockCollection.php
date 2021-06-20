<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsBlock;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsBlockCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CmsBlockEntity::class;
    }
}
