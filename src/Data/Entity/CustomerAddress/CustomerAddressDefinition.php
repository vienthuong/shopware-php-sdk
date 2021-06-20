<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerAddress;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerAddressDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_address';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerAddressEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerAddressCollection::class;
    }
}
