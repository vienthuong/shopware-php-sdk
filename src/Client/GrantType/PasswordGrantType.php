<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Client\GrantType;

class PasswordGrantType extends GrantType
{
    public string $username;

    public string $password;

    public string $scopes;

    public function __construct(string $username, string $password, string $scopes = 'write')
    {
        parent::__construct(self::PASSWORD, self::ADMINISTRATION_CLIENT_ID);
        $this->username = $username;
        $this->password = $password;
        $this->scopes = $scopes;
    }
}
