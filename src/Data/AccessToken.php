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

    public function isExpired() : bool
    {
        $payload = json_decode(base64_decode(explode('.', $this->accessToken)[1]), true);
        $expiresAt = $payload['exp'];

        return $expiresAt - 10 < time();
    }
}
