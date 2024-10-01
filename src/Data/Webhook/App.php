<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook;

use Vin\ShopwareSdk\Data\Struct;

class App extends Struct
{
    public function __construct(
        protected string $appName,
        protected string $appSecret
    ) {
    }

    public function getAppName(): string
    {
        return $this->appName;
    }

    public function setAppName(string $appName): void
    {
        $this->appName = $appName;
    }

    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    public function setAppSecret(string $appSecret): void
    {
        $this->appSecret = $appSecret;
    }
}
