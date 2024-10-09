<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\AccessTokenProvider;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenProvider\WithClientCredentials;
use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

#[CoversClass(WithClientCredentials::class)]
final class WithClientCredentialsTest extends TestCase
{
    public static function constructionProvider(): \Generator
    {
        $accessTokenFetcher = self::createStub(AccessTokenFetcher::class);

        yield ['KEMTEINHTNGEH', 'MEDF5436DFBFHFHA45', $accessTokenFetcher];
    }

    public static function getAccessTokenProvider(): \Generator
    {
        yield ['KEMTEINHTNGEH', 'MEDF5436DFBFHFHA45'];
    }

    #[DataProvider('constructionProvider')]
    public function testConstruction(string $clientId, string $clientSecret, AccessTokenFetcher $accessTokenFetcher): void
    {
        $accessTokenProvider = new WithClientCredentials($clientId, $clientSecret, $accessTokenFetcher);
        $this->assertInstanceOf(WithClientCredentials::class, $accessTokenProvider);
    }

    #[DataProvider('getAccessTokenProvider')]
    public function testGetAccessToken(string $clientId, string $clientSecret): void
    {
        $accessTokenFetcher = $this->createMock(AccessTokenFetcher::class);
        $accessTokenFetcher->expects($this->once())
            ->method('fetchAccessToken')
            ->with($this->isInstanceOf(ClientCredentialsGrantType::class))
            ->willReturnCallback(function ($grantType) use ($clientId, $clientSecret) {
                $this->assertInstanceOf(ClientCredentialsGrantType::class, $grantType);
                $this->assertEquals($clientId, $grantType->clientId);
                $this->assertEquals($clientSecret, $grantType->clientSecret);

                return new AccessToken('ABC123');
            });

        $accessTokenProvider = new WithClientCredentials($clientId, $clientSecret, $accessTokenFetcher);
        $this->assertInstanceOf(AccessToken::class, $accessTokenProvider->getAccessToken());
    }
}
