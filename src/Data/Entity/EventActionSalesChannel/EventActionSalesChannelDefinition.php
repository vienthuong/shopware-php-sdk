<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventActionSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class EventActionSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'event_action_sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return EventActionSalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return EventActionSalesChannelCollection::class;
    }
}
