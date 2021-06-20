<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Plugin;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PluginDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'plugin';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PluginEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PluginCollection::class;
    }
}
