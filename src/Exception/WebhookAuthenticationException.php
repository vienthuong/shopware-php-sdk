<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

use Vin\ShopwareSdk\Service\Webhook\App;
use Vin\ShopwareSdk\Service\Webhook\Shop;

class WebhookAuthenticationException extends \Exception
{
    private Shop $shop;

    private App $app;

    public function __construct(string $message, Shop $shop, App $app)
    {
        $this->shop = $shop;
        $this->app = $app;

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
