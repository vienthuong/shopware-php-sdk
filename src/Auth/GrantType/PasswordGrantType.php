<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\GrantType;

use Vin\ShopwareSdk\Auth\GrantType;

class PasswordGrantType extends GrantType
{
    public function __construct(
        public string $username,
        public string $password,
        public string $scopes = 'write'
    ) {
        parent::__construct(self::PASSWORD, self::ADMINISTRATION_CLIENT_ID);
    }
}
