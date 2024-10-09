<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenProvider;

use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

final class WithClientCredentials implements AccessTokenProvider
{
    private GrantType $grantType;

    public function __construct(
        string $clientId,
        string $clientSecret,
        private readonly AccessTokenFetcher $accessTokenFetcher
    ) {
        $this->grantType = new ClientCredentialsGrantType($clientId, $clientSecret);
    }

    public function getAccessToken(): AccessToken
    {
        return $this->accessTokenFetcher->fetchAccessToken($this->grantType);
    }
}
