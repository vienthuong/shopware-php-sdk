<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\LogEntry;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LogEntryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'log_entry';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LogEntryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LogEntryCollection::class;
    }
}
