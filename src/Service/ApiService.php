<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

final class ApiService implements ApiServiceInterface
{
    use CreateClientTrait;

    public function __construct(
        private readonly ContextBuilderFactoryInterface $contextBuilderFactory,
        protected string $contentType = 'application/vnd.api+json'
    ) {
        $this->httpClient ??= $this->createHttpClient();
    }

    public function delete(string $endpoint, array $params, array $additionalHeaders): ApiResponse
    {
        $context = $this->buildContext($additionalHeaders);
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->delete($url, [
            'headers' => $this->buildHeaders($context),
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode(), $context);
    }

    public function get(string $endpoint, array $params, array $additionalHeaders): ApiResponse
    {
        $context = $this->buildContext($additionalHeaders);
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->get($url, [
            'headers' => $this->buildHeaders($context),
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode(), $context);
    }

    public function patch(string $endpoint, array $params, $data, array $additionalHeaders): ApiResponse
    {
        $context = $this->buildContext($additionalHeaders);
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->patch($url, [
            'headers' => $this->buildHeaders($context),
            'body' => $data,
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode(), $context);
    }

    public function post(string $endpoint, array $params, $data, array $additionalHeaders): ApiResponse
    {
        $context = $this->buildContext($additionalHeaders);
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->post($url, [
            'headers' => $this->buildHeaders($context),
            'body' => $data,
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode(), $context);
    }

    /**
     * @param array<string, string|int|float|bool|null> $additionalHeaders
     * @throws AuthorizationFailedException
     */
    private function buildContext(array $additionalHeaders): Context
    {
        $contextBuilder = $this->contextBuilderFactory->createContextBuilder();
        $contextBuilder->withAdditionalHeaders($additionalHeaders);

        return $contextBuilder->build();
    }

    private function buildHeaders(Context $context): array
    {
        $headers = [
            'Accept' => $this->contentType,
            'Authorization' => 'Bearer ' . $context->accessToken->accessToken,
            'Content-Type' => 'application/json',
        ];

        return array_filter($headers);
    }

    private function buildUrl(string $endpoint, array $params, Context $context): string
    {
        $url = $context->apiEndpoint . $endpoint;

        if (count($params) > 0) {
            $url .= '?' . http_build_query($params);
        }

        return $url;
    }
}
