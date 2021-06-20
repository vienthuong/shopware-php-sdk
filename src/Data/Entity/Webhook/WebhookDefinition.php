<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Webhook;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class WebhookDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'webhook';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return WebhookEntity::class;
    }

    public function getEntityCollection() : string
    {
        return WebhookCollection::class;
    }
}
