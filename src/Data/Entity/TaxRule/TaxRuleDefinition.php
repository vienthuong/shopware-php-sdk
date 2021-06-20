<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\TaxRule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'tax_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return TaxRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return TaxRuleCollection::class;
    }
}
