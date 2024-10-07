<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\GrantType;

use Vin\ShopwareSdk\Auth\GrantType;

class RefreshTokenGrantType extends GrantType
{
    public string $password;

    public string $scopes;

    public function __construct(
        public string $refreshToken
    ) {
        parent::__construct(self::REFRESH_TOKEN, self::ADMINISTRATION_CLIENT_ID);
    }
}
