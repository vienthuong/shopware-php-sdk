<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Client\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Client\GrantType\GrantType;
use Vin\ShopwareSdk\Client\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Client\GrantType\RefreshTokenGrantType;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\EndPointTrait;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;

class AdminAuthenticator
{
    use CreateClientTrait;
    use EndPointTrait;

    public const OAUTH_TOKEN_ENDPOINT = '/api/oauth/token';

    public static array $headers = [
        'Content-Type' => 'application/x-www-form-urlencoded',
    ];

    /**
     * @var callable|null
     */
    private $tokenCallback;

    private array $config;

    private string $endpoint;

    public function __construct(
        private GrantType $grantType,
        string $endpoint,
        array $config = []
    ) {
        $this->config = array_merge([
            'sec_before_refresh' => 30,
            'max_attempt' => 1,
            'sec_before_attempt' => 1,
        ], $config);

        $this->httpClient ??= $this->createHttpClient($this->config);
        $this->endpoint = $this->removeLastSlashes($endpoint);
    }

    public function fetchAccessToken(): AccessToken
    {
        $formParams = $this->buildFormParams();

        try {
            $response = $this->httpClient->post($this->getFullUrl(self::OAUTH_TOKEN_ENDPOINT), [
                'headers' => self::$headers,
                'form_params' => $formParams,
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            throw new AuthorizationFailedException(
                $exception->getResponse()
                    ->getBody()
                    ->getContents(),
                $exception->getCode(),
                $exception
            );
        }

        $tokenPayload = \json_decode($response, true) ?? [];

        if (empty($tokenPayload['access_token'])) {
            throw new AuthorizationFailedException('Access token is invalid format', 401);
        }

        $callback = $this->tokenCallback;

        $token = new AccessToken(
            $tokenPayload['access_token'],
            $tokenPayload['expires_in'] ?? 600,
            $tokenPayload['token_type'] ?? null,
            $tokenPayload['refresh_token'] ?? null
        );

        if ($callback && is_callable($callback)) {
            $callback($token, $tokenPayload);
        }

        return $token;
    }

    public function setTokenCallback(callable $callback): void
    {
        $this->tokenCallback = $callback;
    }

    public function getTokenCallback(): ?callable
    {
        return $this->tokenCallback;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function setEndpoint(string $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    public function getGrantType(): GrantType
    {
        return $this->grantType;
    }

    public function setGrantType(GrantType $grantType): void
    {
        $this->grantType = $grantType;
    }

    private function buildFormParams(): array
    {
        $grantType = $this->grantType;

        $formParams = [
            'grant_type' => $grantType->grantType,
            'client_id' => $grantType->clientId,
        ];

        switch (true) {
            case $grantType instanceof ClientCredentialsGrantType:
                $formParams['client_secret'] = $grantType->clientSecret;
                return $formParams;
            case $grantType instanceof PasswordGrantType:
                $formParams['password'] = $grantType->password;
                $formParams['username'] = $grantType->username;
                $formParams['scope'] = $grantType->scopes;
                return $formParams;
            case $grantType instanceof RefreshTokenGrantType:
                $formParams['refresh_token'] = $grantType->refreshToken;
                return $formParams;
            default:
                throw new \InvalidArgumentException('Grant type ' . $grantType->grantType . ' is not supported', 400);
        }
    }

    private function getFullUrl(string $path): string
    {
        return $this->endpoint . $path;
    }
}
