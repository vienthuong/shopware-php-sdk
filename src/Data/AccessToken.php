<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

class AccessToken
{
    public string $accessToken;

    public int $expiresIn;

    public string $tokenType;

    public ?string $refreshToken;

    public function __construct(string $accessToken, int $expiresIn = 600, string $tokenType = 'Bearer', ?string $refreshToken = null)
    {
        $this->accessToken = $accessToken;
        $this->expiresIn = $expiresIn;
        $this->tokenType = $tokenType;
        $this->refreshToken = $refreshToken;
    }
}
