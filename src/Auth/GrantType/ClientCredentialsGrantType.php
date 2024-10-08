<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\GrantType;

use Vin\ShopwareSdk\Auth\GrantType;

/**
 * @phpstan-type ClientCredentialsGrantData array{grant_type: string, client_id: string, client_secret: string}
 */
class ClientCredentialsGrantType extends GrantType
{
    public function __construct(
        string $clientId,
        public string $clientSecret
    ) {
        parent::__construct(self::CLIENT_CREDENTIALS, $clientId);
    }

    public function buildFormData(): array
    {
        return [
            'grant_type' => $this->grantType,
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ];
    }
}
