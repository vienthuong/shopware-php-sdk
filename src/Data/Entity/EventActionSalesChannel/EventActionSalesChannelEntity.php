<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventActionSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EventAction\EventActionEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class EventActionSalesChannelEntity extends Entity
{
    public ?string $eventActionId = null;

    public ?string $salesChannelId = null;

    public ?EventActionEntity $eventAction = null;

    public ?SalesChannelEntity $salesChannel = null;
}
