<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\UserConfig;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserConfigDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'user_config';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return UserConfigEntity::class;
    }

    public function getEntityCollection() : string
    {
        return UserConfigCollection::class;
    }
}
