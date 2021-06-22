<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Client\GrantType;

abstract class GrantType
{
    protected const ADMINISTRATION_CLIENT_ID = 'administration';

    public const CLIENT_CREDENTIALS = 'client_credentials';

    public const PASSWORD = 'password';

    public const REFRESH_TOKEN = 'refresh_token';

    private const ALLOWED_GRANTS = ['refresh_token', 'password', 'client_credentials'];

    public string $grantType;

    public string $clientId;

    public function __construct(string $grantType, string $clientId)
    {
        if (!\in_array($grantType, self::ALLOWED_GRANTS)) {
            throw new \InvalidArgumentException('Grant type ' . $grantType . ' is not supported', 400);
        }
        $this->grantType = $grantType;
        $this->clientId = $clientId;
    }

    public static function createFromConfig(array $config): GrantType
    {
        if (empty($config['grant_type'])) {
            throw new \InvalidArgumentException('Grant type is not provided in the config', 400);
        }

        $grantType = $config['grant_type'];

        switch ($grantType) {
            case self::REFRESH_TOKEN: {
                return new RefreshTokenGrantType($config['refresh_token']);
            }
            case self::CLIENT_CREDENTIALS: {
                return new ClientCredentialsGrantType($config['client_id'], $config['client_secret']);
            }
            case self::PASSWORD: {
                return new PasswordGrantType($config['username'], $config['password'], $config['scopes'] ?? 'write');
            }
            default: {
                throw new \InvalidArgumentException('Grant type ' . $grantType . ' is not supported', 400);
            }
        }
    }
}
