<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenFetcher;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\ResponseParserInterface;

final class SimpleFetcher implements AccessTokenFetcher
{
    private const OAUTH_TOKEN_ENDPOINT = '/api/oauth/token';

    public function __construct(
        private readonly string $shopUrl,
        private readonly TokenRequestFactoryInterface $tokenRequestFactory,
        private readonly ResponseParserInterface $responseParser,
        private readonly ClientInterface $psr18HttpClient,
    ) {
    }

    /**
     * @throws AuthorizationFailedException
     */
    public function fetchAccessToken(GrantType $grantType): AccessToken
    {
        $uri = $this->shopUrl . self::OAUTH_TOKEN_ENDPOINT;
        $formData = $grantType->buildFormData();
        $request = $this->tokenRequestFactory->createRequest($uri, $formData);

        try {
            $response = $this->psr18HttpClient->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new AuthorizationFailedException($clientException->getMessage(), $clientException->getCode(), $clientException);
        }

        try {
            $tokenData = $this->responseParser->getDecodedResponseContent($response);
        } catch (ShopwareResponseException $exception) {
            throw new AuthorizationFailedException($exception->getMessage(), $exception->getCode(), $exception);
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
