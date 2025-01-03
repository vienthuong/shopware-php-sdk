<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\WebhookEventLog;

use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class WebhookEventLogEntity extends Entity
{
    public ?string $appName = null;

    public ?string $webhookName = null;

    public ?string $eventName = null;

    public ?string $deliveryStatus = null;

    public ?int $timestamp = null;

    public ?int $processingTime = null;

    public ?string $appVersion = null;

    public ?array $requestContent = null;

    public ?array $responseContent = null;

    public ?int $responseStatusCode = null;

    public ?string $responseReasonPhrase = null;

    public ?string $url = null;

    public ?bool $onlyLiveVersion = null;

    public ?string $serializedWebhookMessage = null;
}
