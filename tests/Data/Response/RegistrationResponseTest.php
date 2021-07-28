<?php
declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Data\Response;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Data\Response\ActionButtonResponse;
use Vin\ShopwareSdk\Data\Response\OpenModalResponse;
use Vin\ShopwareSdk\Data\Response\OpenNewTabResponse;
use Vin\ShopwareSdk\Data\Response\RegistrationResponse;
use Vin\ShopwareSdk\Data\Response\ReloadDataResponse;
use Vin\ShopwareSdk\Data\Webhook\Shop;
use Vin\ShopwareSdk\Data\Webhook\ShopRegistrationResult;

class RegistrationResponseTest extends TestCase
{
    public function testResponse(): void
    {
        $proof = 'proof';
        $shop = new Shop('shopId', 'shopSecret');

        $result = new ShopRegistrationResult($proof, $shop);
        $confirmationUrl = 'http://app.test/confirmation-url';
        $response = new RegistrationResponse($result, $confirmationUrl);

        static::assertInstanceOf(ResponseInterface::class, $response);
        $jsonResponse = json_decode($response->getBody()->__toString(), true);

        static::assertNotEmpty($jsonResponse);
        static::assertEquals([
            'proof' => $proof,
            'secret' => $shop->getShopSecret(),
            'confirmation_url' => $confirmationUrl
        ], $jsonResponse);
        static::assertEquals(200, $response->getStatusCode());
    }

    public function testReloadDataResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new ReloadDataResponse('appSecret');

        $stringResponse = $response->getBody()->__toString();
        $jsonResponse = json_decode($response->getBody()->__toString(), true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        static::assertNotEmpty($jsonResponse);
        static::assertNotEmpty($response->getHeaders());
        static::assertNotEmpty($response->getHeader('shopware-app-signature'));
        static::assertEquals($signature, $response->getHeader('shopware-app-signature')[0]);
        static::assertEquals(ActionButtonResponse::ACTION_RELOAD_DATA, $jsonResponse['actionType']);
        static::assertEquals([], $jsonResponse['payload']);
        static::assertEquals(200, $response->getStatusCode());
    }

    public function testOpenModalResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new OpenModalResponse('appSecret', 'http://shopware.test');

        $stringResponse = $response->getBody()->__toString();
        $jsonResponse = json_decode($response->getBody()->__toString(), true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        static::assertNotEmpty($jsonResponse);
        static::assertNotEmpty($response->getHeaders());
        static::assertNotEmpty($response->getHeader('shopware-app-signature'));
        static::assertEquals($signature, $response->getHeader('shopware-app-signature')[0]);
        static::assertEquals(ActionButtonResponse::ACTION_OPEN_MODAL, $jsonResponse['actionType']);
        static::assertEquals([
            'iframeUrl' => 'http://shopware.test',
            'size' => OpenModalResponse::LARGE_SIZE,
            'expand' => false,
        ], $jsonResponse['payload']);
        static::assertEquals(200, $response->getStatusCode());
    }

    public function testOpenNewTabResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new OpenNewTabResponse('appSecret', 'https://google.com');

        $stringResponse = $response->getBody()->__toString();
        $jsonResponse = json_decode($response->getBody()->__toString(), true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        static::assertNotEmpty($jsonResponse);
        static::assertNotEmpty($response->getHeaders());
        static::assertNotEmpty($response->getHeader('shopware-app-signature'));
        static::assertEquals($signature, $response->getHeader('shopware-app-signature')[0]);
        static::assertEquals(ActionButtonResponse::ACTION_OPEN_NEW_TAB, $jsonResponse['actionType']);
        static::assertEquals([
            'redirectUrl' => 'https://google.com',
        ], $jsonResponse['payload']);
        static::assertEquals(200, $response->getStatusCode());
    }
}