<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\VersionCommitData;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCommitDataDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'version_commit_data';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return VersionCommitDataEntity::class;
    }

    public function getEntityCollection() : string
    {
        return VersionCommitDataCollection::class;
    }
}
