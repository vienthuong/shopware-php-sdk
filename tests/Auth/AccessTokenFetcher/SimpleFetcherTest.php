<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\AccessTokenFetcher;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher\SimpleFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher\TokenRequestFactoryInterface;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Auth\GrantType\RefreshTokenGrantType;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Http\ResponseParserInterface;

#[CoversClass(SimpleFetcher::class)]
final class SimpleFetcherTest extends TestCase
{
    public static function fetchAccessTokenProvider(): \Generator
    {
        $shopUrl = 'https://shopware.local';

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
            $expectedUri,
            $expectedData,
            $responseData,
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
            $expectedUri,
            $expectedData,
            $responseData,
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
            $expectedUri,
            $expectedData,
            $responseData,
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
        string $expectedUri,
        string $expectedData,
        array $responseData,
        string $expectedTokenType,
        string $expectedAccessToken,
        int $expectedExpiresIn,
        ?string $expectedRefreshToken
    ): void {
        $requestFactory = $this->createMock(TokenRequestFactoryInterface::class);
        $responseParser = $this->createMock(ResponseParserInterface::class);
        $clientInterface = $this->createMock(ClientInterface::class);

        $request = $this->createMock(RequestInterface::class);
        $response = $this->createMock(ResponseInterface::class);

        $accessTokenFetcher = new SimpleFetcher($shopUrl, $requestFactory, $responseParser, $clientInterface);

        $requestFactory->expects($this->once())
            ->method('createRequest')
            ->willReturnCallback(function (string $uri, array $data) use ($expectedUri, $expectedData, $request) {
                $this->assertEquals($expectedUri, $uri);
                $this->assertEquals($expectedData, json_encode($data));

                return $request;
            });

        $responseParser->expects($this->once())
            ->method('getDecodedResponseContent')
            ->willReturn($responseData);

        $clientInterface->expects($this->once())
            ->method('sendRequest')
            ->willReturnCallback(function ($passedRequest) use ($request, $response) {
                $this->assertEquals($request, $passedRequest);

                return $response;
            });

        $accessToken = $accessTokenFetcher->fetchAccessToken($grantType);
        $this->assertInstanceOf(AccessToken::class, $accessToken);
        $this->assertEquals($expectedTokenType, $accessToken->tokenType);
        $this->assertEquals($expectedAccessToken, $accessToken->accessToken);
        $this->assertEquals($expectedExpiresIn, $accessToken->expiresIn);
        $this->assertEquals($expectedRefreshToken, $accessToken->refreshToken);
    }
}
