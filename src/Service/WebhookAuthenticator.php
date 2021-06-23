<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Webhook\App;
use Vin\ShopwareSdk\Data\Webhook\Shop;
use Vin\ShopwareSdk\Data\Webhook\ShopRegistrationResult;
use Vin\ShopwareSdk\Exception\WebhookAuthenticationException;

class WebhookAuthenticator
{
    public function register(App $app): ShopRegistrationResult
    {
        $appSignature = $_SERVER['HTTP_SHOPWARE_APP_SIGNATURE'];
        $queryString = $_SERVER['QUERY_STRING'];

        $queries = [];

        parse_str($queryString, $queries);

        $shop = new Shop($queries['shop-id'], $queries['shop-url']);

        $hmac = \hash_hmac('sha256', htmlspecialchars_decode($queryString), $app->getAppSecret());

        if (!hash_equals($hmac, $appSignature)) {
            throw new WebhookAuthenticationException(sprintf('Could not authenticate with store due to hash is not equals. Shopurl: %s', $shop->getShopUrl()), $shop, $app);
        }

        $proof = \hash_hmac('sha256', $shop->getShopId() . $shop->getShopUrl() . $app->getAppName(), $app->getAppSecret());

        return new ShopRegistrationResult($proof, $shop);
    }

    public static function authenticatePostRequest(string $shopSecret): bool
    {
        $signature = $_SERVER['HTTP_SHOPWARE_SHOP_SIGNATURE'];
        $requestContent = (string) file_get_contents('php://input');

        $hmac = \hash_hmac('sha256', $requestContent, $shopSecret);

        return hash_equals($hmac, $signature);
    }

    public static function authenticateGetRequest(string $shopSecret): bool
    {
        $queryString = $_SERVER['QUERY_STRING'];

        $queries = [];

        parse_str($queryString, $queries);

        $shop = new Shop($queries['shop-id'], $queries['shop-url'], $shopSecret);

        $queryString = sprintf(
            'shop-id=%s&shop-url=%s&timestamp=%s&sw-version=%s',
            $shop->getShopId(),
            $shop->getShopUrl(),
            $queries['timestamp'],
            $queries['sw-version'],
        );

        $hmac = \hash_hmac('sha256', htmlspecialchars_decode($queryString), $shopSecret);

        return hash_equals($hmac, $queries['shopware-shop-signature']);
    }
}
