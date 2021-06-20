<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelDomain;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelDomainDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_domain';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelDomainEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelDomainCollection::class;
    }
}
