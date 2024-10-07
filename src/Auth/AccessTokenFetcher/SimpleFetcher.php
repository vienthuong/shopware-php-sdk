<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenFetcher;

use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AdminAuthenticator;
use Vin\ShopwareSdk\Data\AccessToken;

final class SimpleFetcher implements AccessTokenFetcher
{
    public function fetchAccessToken(AdminAuthenticator $adminAuthenticator): AccessToken
    {
        $accessToken = $adminAuthenticator->fetchAccessToken();

        if ($accessToken->isExpired()) {
            $accessToken = $adminAuthenticator->fetchAccessToken();
        }

        return $accessToken;
    }
}
