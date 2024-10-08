<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenFetcher;

use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;

final class CachedFetcher implements AccessTokenFetcher
{
    public function __construct(
        private readonly AccessTokenFetcher $accessTokenFetcher,
        private readonly CacheInterface $cache
    ) {
    }

    /**
     * @throws InvalidArgumentException
     * @throws AuthorizationFailedException
     */
    public function fetchAccessToken(GrantType $grantType): AccessToken
    {
        $accessToken = $this->cache->get('admin-api-oauth-access-token');
        if (! $accessToken instanceof AccessToken) {
            $accessToken = $this->accessTokenFetcher->fetchAccessToken($grantType);
            $this->cache->set('admin-api-oauth-access-token', $accessToken);
        }

        if ($accessToken->isExpired()) {
            $this->cache->delete('admin-api-oauth-access-token');
            $accessToken = $this->accessTokenFetcher->fetchAccessToken($grantType);
            $this->cache->set('admin-api-oauth-access-token', $accessToken);
        }

        return $accessToken;
    }
}
