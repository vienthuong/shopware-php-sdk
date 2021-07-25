<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\WebhookEventLog;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(WebhookEventLogEntity $entity)
 * @method void set(WebhookEventLogEntity $entity)
 * @method WebhookEventLogEntity[] getIterator()
 * @method WebhookEventLogEntity[] getElements()
 * @method WebhookEventLogEntity|null get(string $key)
 * @method WebhookEventLogEntity|null first()
 * @method WebhookEventLogEntity|null last()
 */
class WebhookEventLogCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return WebhookEventLogEntity::class;
    }
}
