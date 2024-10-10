<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\AccessTokenFetcher;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher\TokenRequestFactory;

#[CoversClass(TokenRequestFactory::class)]
final class TokenRequestFactoryTest extends TestCase
{
    public static function createRequestProvider(): \Generator
    {
        yield [
            'uri' => 'https://shopware.local/api/oauth/token',
            'formData' => [
                'grant_type' => 'client_credentials',
                'client_id' => 'ID',
                'client_secret' => 'SECRET',
            ],
        ];
    }

    #[DataProvider('createRequestProvider')]
    public function testCreateRequest(string $uri, array $formData): void
    {
        $streamFactory = $this->createMock(StreamFactoryInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);

        $request = $this->createMock(RequestInterface::class);

        $tokenRequestFactory = new TokenRequestFactory($streamFactory, $requestFactory);

        $withHeaderMethodCall = 0;
        $request->expects($this->exactly(2))
            ->method('withHeader')
            ->willReturnCallback(function (string $name, $value) use (&$withHeaderMethodCall, $request) {
                $passedHeaders = [[
                    'Accept' => 'application/json',
                ], [
                    'Content-Type' => 'application/json',
                ]];
                $this->assertEquals($passedHeaders[$withHeaderMethodCall], [
                    $name => $value,
                ]);
                $withHeaderMethodCall++;

                return $request;
            });
        $request->expects($this->exactly(1))
            ->method('withBody')
            ->willReturnCallback(function ($body) use ($formData, $request) {
                $this->assertEquals(json_encode($formData), (string) $body);

                return $request;
            });

        $streamFactory->expects($this->once())
            ->method('createStream')
            ->willReturnCallback(function (string $body) {
                $stream = $this->createMock(StreamInterface::class);
                $stream->expects($this->once())
                    ->method('__toString')
                    ->willReturn($body);

                return $stream;
            });

        $streamFactory->expects($this->once())
            ->method('createStream')
            ->willReturn($this->createStub(StreamInterface::class));

        $requestFactory->expects($this->once())
            ->method('createRequest')
            ->willReturn($request);

        /** @phpstan-ignore-next-line */
        $createdResponse = $tokenRequestFactory->createRequest($uri, $formData);
        $this->assertInstanceOf(RequestInterface::class, $createdResponse);
    }
}
