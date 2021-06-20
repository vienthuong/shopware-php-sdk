<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\App;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'app';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return AppEntity::class;
    }

    public function getEntityCollection() : string
    {
        return AppCollection::class;
    }
}
