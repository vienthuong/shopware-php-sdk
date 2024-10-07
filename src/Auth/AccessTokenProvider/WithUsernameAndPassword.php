<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenProvider;

use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Auth\AdminAuthenticator;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

final class WithUsernameAndPassword implements AccessTokenProvider
{
    private readonly AdminAuthenticator $adminClient;

    public function __construct(
        string $shopUrl,
        string $username,
        string $password,
        private readonly AccessTokenFetcher $accessTokenFetcher,
    ) {
        $grant = new PasswordGrantType($username, $password);
        $this->adminClient = new AdminAuthenticator($grant, $shopUrl);
    }

    public function getAccessToken(): AccessToken
    {
        return $this->accessTokenFetcher->fetchAccessToken($this->adminClient);
    }
}
