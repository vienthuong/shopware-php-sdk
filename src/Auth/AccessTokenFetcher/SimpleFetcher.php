<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenFetcher;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;

final class SimpleFetcher implements AccessTokenFetcher
{
    private const OAUTH_TOKEN_ENDPOINT = '/api/oauth/token';

    public function __construct(
        private readonly string $shopUrl,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory,
        private readonly ClientInterface $psr18HttpClient,
    ) {
    }

    /**
     * @throws AuthorizationFailedException
     */
    public function fetchAccessToken(GrantType $grantType): AccessToken
    {
        $formData = $grantType->buildFormData();
        /** @var string $data */
        $data = json_encode($formData);
        $body = $this->streamFactory->createStream($data);

        $uri = $this->shopUrl . self::OAUTH_TOKEN_ENDPOINT;
        $request = $this->requestFactory->createRequest('POST', $uri)
            ->withHeader('Accept', 'application/json')
            ->withHeader('Content-Type', 'application/json')
            ->withBody($body);

        try {
            $response = $this->psr18HttpClient->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new AuthorizationFailedException($clientException->getMessage(), $clientException->getCode(), $clientException);
        }

        if ($response->getStatusCode() >= 400 && $response->getStatusCode() < 600) {
            $message = $response->getBody()
                ->getContents();

            throw new AuthorizationFailedException($message, $response->getStatusCode());
        }

        try {
            $tokenData = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            $message = sprintf('Failed to parse JSON response: %s', $exception->getMessage());

            throw new AuthorizationFailedException($message, $response->getStatusCode(), $exception);
        }

        if (array_key_exists('access_token', $tokenData) === false || is_string($tokenData['access_token']) === false) {
            throw new AuthorizationFailedException('Missing access token in response', $response->getStatusCode());
        }

        return new AccessToken(
            $tokenData['access_token'],
            $tokenData['expires_in'] ?? 600,
            $tokenData['token_type'] ?? null,
            $tokenData['refresh_token'] ?? null
        );
    }
}
