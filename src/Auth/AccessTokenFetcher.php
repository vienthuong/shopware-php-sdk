<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth;

use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;

interface AccessTokenFetcher
{
    /**
     * @throws AuthorizationFailedException
     */
    public function fetchAccessToken(AdminAuthenticator $adminAuthenticator): AccessToken;
}
