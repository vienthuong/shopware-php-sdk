<?php
declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Data\Response;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Data\Response\ActionButtonResponse;
use Vin\ShopwareSdk\Data\Response\EmptyResponse;
use Vin\ShopwareSdk\Data\Response\NotificationResponse;
use Vin\ShopwareSdk\Data\Response\OpenModalResponse;
use Vin\ShopwareSdk\Data\Response\OpenNewTabResponse;
use Vin\ShopwareSdk\Data\Response\ReloadDataResponse;

class ActionButtonResponseTest extends TestCase
{
    public function testEmptyResponsestEmptyResponse(): void
    {
        $response = new EmptyResponse();

        static::assertEquals(0, $response->getBody()->getSize());
        static::assertEmpty($response->getBody()->getContents());
        static::assertEmpty($response->getHeaders());
        static::assertEquals(204, $response->getStatusCode());
    }

    public function testNotificationResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new NotificationResponse('appSecret', 'Success', 'error');
        static::assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()->__toString();
        $jsonResponse = json_decode($stringResponse, true);
        $signature = hash_hmac('sha256', $stringResponse, $appSecret);

        static::assertNotEmpty($jsonResponse);
        static::assertNotEmpty($response->getHeaders());
        static::assertNotEmpty($response->getHeader('shopware-app-signature'));
        static::assertEquals($signature, $response->getHeader('shopware-app-signature')[0]);
        static::assertEquals(ActionButtonResponse::ACTION_SHOW_NOTIFICATION, $jsonResponse['actionType']);
        static::assertEquals([
            'status' => 'error',
            'message' => 'Success',
        ], $jsonResponse['payload']);
        static::assertEquals(200, $response->getStatusCode());
    }

    public function testReloadDataResponse(): void
    {
        $appSecret = 'appSecret';
        $response = new ReloadDataResponse('appSecret');
        static::assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()->__toString();
        $jsonResponse = json_decode($stringResponse, true);
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
        static::assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()->__toString();
        $jsonResponse = json_decode($stringResponse, true);
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
        static::assertInstanceOf(ResponseInterface::class, $response);

        $stringResponse = $response->getBody()->__toString();
        $jsonResponse = json_decode($stringResponse, true);
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