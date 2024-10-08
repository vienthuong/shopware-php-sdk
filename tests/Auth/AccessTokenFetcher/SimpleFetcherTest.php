<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\AccessTokenFetcher;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher\SimpleFetcher;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Auth\GrantType\RefreshTokenGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

#[CoversClass(SimpleFetcher::class)]
final class SimpleFetcherTest extends TestCase
{
    public static function fetchAccessTokenProvider()
    {
        $shopUrl = 'https://shopware.local';

        $expectedMethod = 'POST';
        $expectedUri = 'https://shopware.local/api/oauth/token';

        $grant = new ClientCredentialsGrantType('ID', 'SECRET');
        $expectedData = json_encode([
            'grant_type' => 'client_credentials',
            'client_id' => 'ID',
            'client_secret' => 'SECRET',
        ]);
        $responseData = [
            'token_type' => 'Bearer',
            'expires_in' => 600,
            'access_token' => 'ACCESS_TOKEN',
        ];
        yield [
            $shopUrl,
            $grant,
            $expectedMethod,
            $expectedUri,
            $expectedData,
            json_encode($responseData),
            $responseData['token_type'],
            $responseData['access_token'],
            $responseData['expires_in'],
            null,
        ];

        $grant = new PasswordGrantType('admin', 'shopware');
        $expectedData = json_encode([
            'grant_type' => 'password',
            'client_id' => 'administration',
            'username' => 'admin',
            'password' => 'shopware',
            'scopes' => 'write',
        ]);
        $responseData = [
            'token_type' => 'Bearer',
            'expires_in' => 600,
            'access_token' => 'ACCESS_TOKEN',
            'refresh_token' => 'REFRESH_TOKEN',
        ];
        yield [
            $shopUrl,
            $grant,
            $expectedMethod,
            $expectedUri,
            $expectedData,
            json_encode($responseData),
            $responseData['token_type'],
            $responseData['access_token'],
            $responseData['expires_in'],
            $responseData['refresh_token'],
        ];

        $grant = new RefreshTokenGrantType('REFRESH_TOKEN');
        $expectedData = json_encode([
            'grant_type' => 'refresh_token',
            'client_id' => 'administration',
            'refresh_token' => 'REFRESH_TOKEN',
        ]);
        $responseData = [
            'token_type' => 'Bearer',
            'expires_in' => 600,
            'access_token' => 'ACCESS_TOKEN',
            'refresh_token' => 'REFRESH_TOKEN_2',
        ];
        yield [
            $shopUrl,
            $grant,
            $expectedMethod,
            $expectedUri,
            $expectedData,
            json_encode($responseData),
            $responseData['token_type'],
            $responseData['access_token'],
            $responseData['expires_in'],
            $responseData['refresh_token'],
        ];
    }

    #[DataProvider('fetchAccessTokenProvider')]
    public function testFetchAccessToken(
        string $shopUrl,
        GrantType $grantType,
        string $expectedMethod,
        string $expectedUri,
        string $expectedData,
        string $responseData,
        string $expectedTokenType,
        string $expectedAccessToken,
        int $expectedExpiresIn,
        ?string $expectedRefreshToken
    ): void {
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $streamFactory = $this->createMock(StreamFactoryInterface::class);
        $clientInterface = $this->createMock(ClientInterface::class);

        $request = $this->createMock(RequestInterface::class);
        $response = $this->createMock(ResponseInterface::class);

        $accessTokenFetcher = new SimpleFetcher($shopUrl, $requestFactory, $streamFactory, $clientInterface);

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
            ->willReturnCallback(function ($body) use ($expectedData, $request) {
                $this->assertEquals($expectedData, $body);

                return $request;
            });

        $requestFactory->expects($this->once())
            ->method('createRequest')
            ->willReturnCallback(function (string $method, string $uri) use ($expectedMethod, $expectedUri, $request) {
                $this->assertEquals($expectedMethod, $method);
                $this->assertEquals($expectedUri, $uri);

                return $request;
            });

        $streamFactory->expects($this->once())
            ->method('createStream')
            ->willReturnCallback(function (string $body) use ($expectedData) {
                $this->assertEquals($expectedData, $body);

                $stream = $this->createMock(StreamInterface::class);
                $stream->expects($this->once())
                    ->method('__toString')
                    ->willReturn($body);

                return $stream;
            });

        $clientInterface->expects($this->once())
            ->method('sendRequest')
            ->willReturnCallback(function ($passedRequest) use ($request, $response) {
                $this->assertEquals($request, $passedRequest);

                return $response;
            });

        $response->expects($this->once())
            ->method('getStatusCode')
            ->willReturn(200);
        $response->expects($this->once())
            ->method('getBody')
            ->willReturnCallback(function () use ($responseData) {
                $stream = $this->createMock(StreamInterface::class);
                $stream->expects($this->once())
                    ->method('getContents')
                    ->willReturn($responseData);

                return $stream;
            });

        $accessToken = $accessTokenFetcher->fetchAccessToken($grantType);
        $this->assertInstanceOf(AccessToken::class, $accessToken);
        $this->assertEquals($expectedTokenType, $accessToken->tokenType);
        $this->assertEquals($expectedAccessToken, $accessToken->accessToken);
        $this->assertEquals($expectedExpiresIn, $accessToken->expiresIn);
        $this->assertEquals($expectedRefreshToken, $accessToken->refreshToken);
    }
}
