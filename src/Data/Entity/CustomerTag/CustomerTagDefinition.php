<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerTagCollection::class;
    }
}
