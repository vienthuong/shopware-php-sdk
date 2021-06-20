<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Tax;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'tax';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return TaxEntity::class;
    }

    public function getEntityCollection() : string
    {
        return TaxCollection::class;
    }
}
