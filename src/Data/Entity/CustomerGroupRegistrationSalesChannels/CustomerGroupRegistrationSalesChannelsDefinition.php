<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerGroupRegistrationSalesChannels;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupRegistrationSalesChannelsDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_group_registration_sales_channels';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerGroupRegistrationSalesChannelsEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerGroupRegistrationSalesChannelsCollection::class;
    }
}
