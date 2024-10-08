<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth;

use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Auth\GrantType\RefreshTokenGrantType;

/**
 * @phpstan-import-type ClientCredentialsGrantData from ClientCredentialsGrantType
 * @phpstan-import-type PasswordGrantData from PasswordGrantType
 * @phpstan-import-type RefreshTokenGrantData from RefreshTokenGrantType
 */
abstract class GrantType
{
    public const CLIENT_CREDENTIALS = 'client_credentials';

    public const PASSWORD = 'password';

    public const REFRESH_TOKEN = 'refresh_token';

    protected const ADMINISTRATION_CLIENT_ID = 'administration';

    private const ALLOWED_GRANTS = ['refresh_token', 'password', 'client_credentials'];

    public string $grantType;

    public function __construct(
        string $grantType,
        public string $clientId
    ) {
        if (! \in_array($grantType, self::ALLOWED_GRANTS)) {
            throw new \InvalidArgumentException('Grant type ' . $grantType . ' is not supported', 400);
        }
        $this->grantType = $grantType;
    }

    /**
     * @return ClientCredentialsGrantData|PasswordGrantData|RefreshTokenGrantData
     */
    abstract public function buildFormData(): array;
}
