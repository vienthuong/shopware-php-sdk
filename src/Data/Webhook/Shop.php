<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook;

use Vin\ShopwareSdk\Data\Struct;
use Vin\ShopwareSdk\Data\Uuid\Uuid;

class Shop extends Struct
{
    protected string $shopSecret;

    public function __construct(
        protected string $shopId,
        protected string $shopUrl,
        ?string $shopSecret = null
    ) {
        $this->shopSecret = $shopSecret ?? Uuid::randomHex();
    }

    public function getShopUrl(): string
    {
        return $this->shopUrl;
    }

    public function setShopUrl(string $shopUrl): void
    {
        $this->shopUrl = $shopUrl;
    }

    public function getShopId(): string
    {
        return $this->shopId;
    }

    public function setShopId(string $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function getShopSecret(): string
    {
        return $this->shopSecret;
    }

    public function setShopSecret(string $shopSecret): void
    {
        $this->shopSecret = $shopSecret;
    }
}
