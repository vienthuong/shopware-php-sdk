<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\GrantType;

use Vin\ShopwareSdk\Auth\GrantType;

/**
 * @phpstan-type PasswordGrantData array{
 *     grant_type: string,
 *     client_id: string,
 *     username: string,
 *     password: string,
 *     scopes: string
 * }
 */
class PasswordGrantType extends GrantType
{
    public function __construct(
        public string $username,
        public string $password,
        public string $scopes = 'write'
    ) {
        parent::__construct(self::PASSWORD, self::ADMINISTRATION_CLIENT_ID);
    }

    public function buildFormData(): array
    {
        return [
            'grant_type' => $this->grantType,
            'client_id' => $this->clientId,
            'username' => $this->username,
            'password' => $this->password,
            'scopes' => $this->scopes,
        ];
    }
}
