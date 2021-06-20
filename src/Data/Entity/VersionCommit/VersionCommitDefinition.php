<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\VersionCommit;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCommitDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'version_commit';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return VersionCommitEntity::class;
    }

    public function getEntityCollection() : string
    {
        return VersionCommitCollection::class;
    }
}
