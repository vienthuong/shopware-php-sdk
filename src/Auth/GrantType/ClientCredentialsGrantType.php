<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\GrantType;

use Vin\ShopwareSdk\Auth\GrantType;

class ClientCredentialsGrantType extends GrantType
{
    public function __construct(
        string $clientId,
        public string $clientSecret
    ) {
        parent::__construct(self::CLIENT_CREDENTIALS, $clientId);
    }
}
