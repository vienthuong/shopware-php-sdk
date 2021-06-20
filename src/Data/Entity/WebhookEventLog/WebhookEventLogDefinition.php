<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\WebhookEventLog;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class WebhookEventLogDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'webhook_event_log';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return WebhookEventLogEntity::class;
    }

    public function getEntityCollection() : string
    {
        return WebhookEventLogCollection::class;
    }
}
