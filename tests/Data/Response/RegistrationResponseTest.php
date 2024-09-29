<?php
declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Data\Response;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Data\Response\RegistrationResponse;
use Vin\ShopwareSdk\Data\Webhook\Shop;
use Vin\ShopwareSdk\Data\Webhook\ShopRegistrationResult;

/**
 * @covers \Vin\ShopwareSdk\Data\Response\RegistrationResponse
 */
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
            'confirmation_url' => $confirmationUrl,
        ], $jsonResponse);
        static::assertEquals(200, $response->getStatusCode());
    }
}
