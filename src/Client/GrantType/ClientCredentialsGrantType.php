<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Client\GrantType;

class ClientCredentialsGrantType extends GrantType
{
    public function __construct(
        string $clientId,
        public string $clientSecret
    ) {
        parent::__construct(self::CLIENT_CREDENTIALS, $clientId);
    }
}
