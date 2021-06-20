<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Rule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return RuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return RuleCollection::class;
    }
}
