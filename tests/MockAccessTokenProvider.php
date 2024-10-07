<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use Vin\ShopwareSdk\Data\AccessToken;

final class MockAccessTokenProvider implements \Vin\ShopwareSdk\Auth\AccessTokenProvider
{
    public function getAccessToken(): AccessToken
    {
        return new AccessToken('mock-token');
    }
}
