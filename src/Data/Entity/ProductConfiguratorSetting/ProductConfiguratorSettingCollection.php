<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductConfiguratorSetting;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductConfiguratorSettingCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ProductConfiguratorSettingEntity::class;
    }
}
