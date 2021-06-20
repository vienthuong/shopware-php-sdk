<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\TaxRuleType;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleTypeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'tax_rule_type';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return TaxRuleTypeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return TaxRuleTypeCollection::class;
    }
}
