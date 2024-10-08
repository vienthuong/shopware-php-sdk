<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\GrantType;

use Vin\ShopwareSdk\Auth\GrantType;

/**
 * @phpstan-type RefreshTokenGrantData array{grant_type: string, client_id: string, refresh_token: string}
 */
class RefreshTokenGrantType extends GrantType
{
    public string $password;

    public string $scopes;

    public function __construct(
        public string $refreshToken
    ) {
        parent::__construct(self::REFRESH_TOKEN, self::ADMINISTRATION_CLIENT_ID);
    }

    /**
     * @return RefreshTokenGrantData
     */
    public function buildFormData(): array
    {
        return [
            'grant_type' => $this->grantType,
            'client_id' => $this->clientId,
            'refresh_token' => $this->refreshToken,
        ];
    }
}
