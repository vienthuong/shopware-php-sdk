<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductConfiguratorSetting;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductConfiguratorSettingDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_configurator_setting';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductConfiguratorSettingEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductConfiguratorSettingCollection::class;
    }
}
