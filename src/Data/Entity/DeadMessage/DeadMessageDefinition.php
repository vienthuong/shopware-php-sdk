<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DeadMessage;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DeadMessageDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'dead_message';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return DeadMessageEntity::class;
    }

    public function getEntityCollection() : string
    {
        return DeadMessageCollection::class;
    }
}
