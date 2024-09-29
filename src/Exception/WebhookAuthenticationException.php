<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

use Vin\ShopwareSdk\Data\Webhook\App;
use Vin\ShopwareSdk\Data\Webhook\Shop;

class WebhookAuthenticationException extends \Exception
{
    public function __construct(
        string $message,
        private readonly Shop $shop,
        private readonly App $app
    ) {
        parent::__construct($message, 401);
    }

    public function getShop(): Shop
    {
        return $this->shop;
    }

    public function getApp(): App
    {
        return $this->app;
    }
}
