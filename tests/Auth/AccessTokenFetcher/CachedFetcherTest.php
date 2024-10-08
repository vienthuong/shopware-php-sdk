<?php

declare(strict_types=1);

namespace Auth\AccessTokenFetcher;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Clock\MockClock;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher\CachedFetcher;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

#[CoversClass(CachedFetcher::class)]
final class CachedFetcherTest extends TestCase
{
    public static function fetchAccessTokenProvider(): \Generator
    {
        $grant = new ClientCredentialsGrantType('ID', 'SECRET');
        // EXP: 1728426853.75985
        $jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJhZG1pbmlzdHJhdGlvbiIsImp0aSI6ImU1NjgwZWQ0MzhiMTZjMjNiMDA0NWFkYjA2YWVjNWU5ODIyY2U1Mzg1MjdiYTcwMTI5OTk2MWFmZGJhOTQ4OWZmZTg2NjQxNDE3NmQ0YWNjIiwiaWF0IjoxNzI4NDI2MjUzLjc2MTYwOCwibmJmIjoxNzI4NDI2MjUzLjc2MTYwOSwiZXhwIjoxNzI4NDI2ODUzLjc1OTg1LCJzdWIiOiI4NmI5NThkNGE0Y2M1Y2QwM2Q4NmVlZDdmZTMxMjFjZiIsInNjb3BlcyI6WyJ3cml0ZSIsImFkbWluIl19.W6AT-vi5as7f-kZNRIwBns5UubPiRP9qHD06v80np80s4P8D-AKVVbFN5nzUa94t0AvFQUVuAK7bP0BGHTDdDGLmq5U0oHfAb9s7hhOIqd2FcyjLhyaz0HXEF2BDBhlSiXebsfI9vEJq6t1PX4bPWWfmSaSvpU1VSfCJ8mbnupRR8Db_rRMbmh7jMUVlu6xGJrF_DQHXrLGjGgmgRH-2O2GvL142vRXy3ckxEcD9aI-5udDAGnDzG4SY9qXlupuvgTIff2z_FwSg1v4BZotm85BzNT1VTxLWCJmK2uoa_E_m5WD3IjXMZ5p7iqrt0yZgP_yMu0DIgd7XkXoHmDBQdg';
        $accessToken = new AccessToken($jwt, 600, 'REFRESH_TOKEN');

        yield [$grant, $accessToken];
    }

    #[DataProvider('fetchAccessTokenProvider')]
    public function testFetchAccessTokenCachedAndExpired(GrantType $grantType, AccessToken $expectedAccessToken): void
    {
        $simpleFetcher = $this->createMock(AccessTokenFetcher::class);
        $cache = $this->createMock(CacheInterface::class);
        $clock = new MockClock($this->createDateTimeImmutable(1728427000));

        $accessTokenFetcher = new CachedFetcher($simpleFetcher, $cache, $clock);

        $simpleFetcher->expects($this->once())
            ->method('fetchAccessToken')
            ->willReturn($expectedAccessToken);

        $cache->expects($this->once())
            ->method('get')
            ->willReturn($expectedAccessToken);

        $cache->expects($this->once())
            ->method('delete')
            ->with('admin-api-oauth-access-token');

        $cache->expects($this->once())
            ->method('set')
            ->with('admin-api-oauth-access-token', $expectedAccessToken);

        $accessToken = $accessTokenFetcher->fetchAccessToken($grantType);
        $this->assertEquals($expectedAccessToken, $accessToken);
    }

    #[DataProvider('fetchAccessTokenProvider')]
    public function testFetchAccessTokenCachedAndNotExpired(GrantType $grantType, AccessToken $expectedAccessToken): void
    {
        $simpleFetcher = $this->createMock(AccessTokenFetcher::class);
        $cache = $this->createMock(CacheInterface::class);
        $clock = new MockClock($this->createDateTimeImmutable(1728426000));

        $accessTokenFetcher = new CachedFetcher($simpleFetcher, $cache, $clock);

        $simpleFetcher->expects($this->never())
            ->method('fetchAccessToken');

        $cache->expects($this->once())
            ->method('get')
            ->willReturn($expectedAccessToken);

        $cache->expects($this->never())
            ->method('set');

        $accessToken = $accessTokenFetcher->fetchAccessToken($grantType);
        $this->assertEquals($expectedAccessToken, $accessToken);
    }

    #[DataProvider('fetchAccessTokenProvider')]
    public function testFetchAccessTokenNotCachedAndNotExpired(GrantType $grantType, AccessToken $expectedAccessToken): void
    {
        $simpleFetcher = $this->createMock(AccessTokenFetcher::class);
        $cache = $this->createMock(CacheInterface::class);
        $clock = new MockClock($this->createDateTimeImmutable(1728426000));

        $accessTokenFetcher = new CachedFetcher($simpleFetcher, $cache, $clock);

        $simpleFetcher->expects($this->once())
            ->method('fetchAccessToken')
            ->willReturn($expectedAccessToken);

        $cache->method('get')
            ->willReturn(null);

        $cache->expects($this->once())
            ->method('set')
            ->with('admin-api-oauth-access-token', $expectedAccessToken);

        $accessToken = $accessTokenFetcher->fetchAccessToken($grantType);
        $this->assertEquals($expectedAccessToken, $accessToken);
    }

    private function createDateTimeImmutable(int $timestamp): \DateTimeImmutable
    {
        $dateTime = new \DateTime();
        $dateTime->setTimestamp($timestamp);

        return \DateTimeImmutable::createFromMutable($dateTime);
    }
}
