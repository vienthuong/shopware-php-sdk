<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenProvider;

use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Data\AccessToken;

final class WithUsernameAndPassword implements AccessTokenProvider
{
    private readonly GrantType $grantType;

    public function __construct(
        string $username,
        string $password,
        private readonly AccessTokenFetcher $accessTokenFetcher,
    ) {
        $this->grantType = new PasswordGrantType($username, $password);
    }

    public function getAccessToken(): AccessToken
    {
        return $this->accessTokenFetcher->fetchAccessToken($this->grantType);
    }
}
