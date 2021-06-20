<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventAction;

use Vin\ShopwareSdk\Data\Entity\Rule\RuleCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class EventActionEntity extends Entity
{
    public ?string $eventName = null;

    public ?string $actionName = null;

    public ?array $config = null;

    public ?bool $active = null;

    public ?string $title = null;

    public ?RuleCollection $rules = null;

    public ?SalesChannelCollection $salesChannels = null;
}
