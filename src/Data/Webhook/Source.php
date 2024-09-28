<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook;

use Vin\ShopwareSdk\Data\Struct;

class Source extends Struct
{
    /**
     * Create the event from Event::createFromPayload.
     */
    public function __construct(private readonly string $shopUrl, private readonly string $shopId, private readonly string $appVersion)
    {
    }

    public function getShopUrl(): string
    {
        return $this->shopUrl;
    }

    public function getShopId(): string
    {
        return $this->shopId;
    }

    public function getAppVersion(): string
    {
        return $this->appVersion;
    }
}
