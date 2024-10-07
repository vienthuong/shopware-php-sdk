<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenProvider;

use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Client\AdminAuthenticator;
use Vin\ShopwareSdk\Client\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

final class WithClientCredentials implements AccessTokenProvider
{
    private AdminAuthenticator $authenticator;

    public function __construct(
        string $shopUrl,
        string $clientId,
        string $clientSecret,
        private readonly AccessTokenFetcher $accessTokenFetcher
    ) {
        $grant = new ClientCredentialsGrantType($clientId, $clientSecret);
        $this->authenticator = new AdminAuthenticator($grant, $shopUrl);
    }

    public function getAccessToken(): AccessToken
    {
        return $this->accessTokenFetcher->fetchAccessToken($this->authenticator);
    }
}
