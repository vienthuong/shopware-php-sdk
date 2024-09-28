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

        parse_str((string) $queryString, $queries);

        if (!is_string($queries['shop-id']) || !is_string($queries['shop-url'])) {
            throw new \RuntimeException('shop-id and shop-url should be strings');
        }

        $shop = new Shop($queries['shop-id'], $queries['shop-url']);

        $hmac = \hash_hmac('sha256', htmlspecialchars_decode((string) $queryString), $app->getAppSecret());

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

        parse_str((string) $queryString, $queries);

        if (!is_string($queries['shop-id']) || !is_string($queries['shop-url'])) {
            throw new \RuntimeException('shop-id and shop-url should be strings');
        }

        $shop = new Shop($queries['shop-id'], $queries['shop-url'], $shopSecret);

        $queryParams = [
            'shop-id' => $shop->getShopId(),
            'shop-url' => $shop->getShopUrl(),
            'timestamp' => $queries['timestamp'],
            'sw-version' => $queries['sw-version'],
        ];

        if (array_key_exists('sw-context-language', $queries)) {
            $queryParams['sw-context-language'] = $queries['sw-context-language'];
        }

        if (array_key_exists('sw-user-language', $queries)) {
            $queryParams['sw-user-language'] = $queries['sw-user-language'];
        }

        if (array_key_exists('location-id', $queries)) {
            $queryParams['location-id'] = $queries['location-id'];
        }

        if (array_key_exists('privileges', $queries)) {
            $queryParams['privileges'] = urlencode($queries['privileges']);
        }

        $queryString = http_build_query($queryParams);


        $hmac = \hash_hmac('sha256', htmlspecialchars_decode($queryString), $shopSecret);

        return hash_equals($hmac, $queries['shopware-shop-signature']);
    }
}
