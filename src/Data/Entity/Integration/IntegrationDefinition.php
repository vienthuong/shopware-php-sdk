<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Integration;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'integration';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return IntegrationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return IntegrationCollection::class;
    }
}
