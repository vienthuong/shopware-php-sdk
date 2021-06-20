<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SystemConfig;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SystemConfigDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'system_config';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SystemConfigEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SystemConfigCollection::class;
    }
}
