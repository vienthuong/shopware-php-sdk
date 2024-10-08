<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\AccessTokenProvider;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenProvider\WithUsernameAndPassword;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

#[CoversClass(WithUsernameAndPassword::class)]
final class WithUsernameAndPasswordTest extends TestCase
{
    public static function constructionProvider(): \Generator
    {
        $accessTokenFetcher = self::createStub(AccessTokenFetcher::class);

        yield ['admin', 'shopware', $accessTokenFetcher];
    }

    public static function getAccessTokenProvider(): \Generator
    {
        yield ['admin', 'shopware'];
    }

    #[DataProvider('constructionProvider')]
    public function testConstruction(string $username, string $password, AccessTokenFetcher $accessTokenFetcher): void
    {
        $accessTokenProvider = new WithUsernameAndPassword($username, $password, $accessTokenFetcher);
        $this->assertInstanceOf(WithUsernameAndPassword::class, $accessTokenProvider);
    }

    #[DataProvider('getAccessTokenProvider')]
    public function testGetAccessToken(string $username, string $password): void
    {
        $accessTokenFetcher = $this->createMock(AccessTokenFetcher::class);
        $accessTokenFetcher->expects($this->once())
            ->method('fetchAccessToken')
            ->with($this->isInstanceOf(PasswordGrantType::class))
            ->willReturnCallback(function ($grantType) use ($username, $password) {
                $this->assertInstanceOf(PasswordGrantType::class, $grantType);
                $this->assertEquals($username, $grantType->username);
                $this->assertEquals($password, $grantType->password);

                return new AccessToken('ABC123');
            });

        $accessTokenProvider = new WithUsernameAndPassword($username, $password, $accessTokenFetcher);
        $this->assertInstanceOf(AccessToken::class, $accessTokenProvider->getAccessToken());
    }
}
