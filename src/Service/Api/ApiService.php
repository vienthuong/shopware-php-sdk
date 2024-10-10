<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Api;

use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Http\HttpClientInterface;
use Vin\ShopwareSdk\Http\Struct\MediaType;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

/**
 * @phpstan-import-type Headers from Context
 */
final class ApiService implements ApiServiceInterface
{
    public function __construct(
        private readonly ContextBuilderFactoryInterface $contextBuilderFactory,
        private readonly HttpClientInterface $httpClient,
    ) {
    }

    public function delete(
        string $endpoint,
        array $params = [],
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse {
        $path = $this->buildPath($endpoint, $params);
        $context = $this->buildContext($additionalHeaders);

        return $this->httpClient->delete($path, $contentTypeHeader, $acceptHeader, $context);
    }

    public function get(
        string $endpoint,
        array $params = [],
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse {
        $path = $this->buildPath($endpoint, $params);
        $context = $this->buildContext($additionalHeaders);

        return $this->httpClient->get($path, $contentTypeHeader, $acceptHeader, $context);
    }

    public function patch(
        string $endpoint,
        array $params = [],
        ?array $data = null,
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse {
        $path = $this->buildPath($endpoint, $params);
        $context = $this->buildContext($additionalHeaders);

        return $this->httpClient->patch($path, $contentTypeHeader, $acceptHeader, $data ?? [], $context);
    }

    public function post(
        string $endpoint,
        array $params = [],
        ?array $data = null,
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse {
        $path = $this->buildPath($endpoint, $params);
        $context = $this->buildContext($additionalHeaders);

        return $this->httpClient->post($path, $contentTypeHeader, $acceptHeader, $data ?? [], $context);
    }

    public function postMediaFile(string $endpoint, array $params, $data): ApiResponse
    {
        $path = $this->buildPath($endpoint, $params);

        $context = $this->buildContext([]);

        return $this->httpClient->postGenericData($path, MediaType::NONE, MediaType::APPLICATION_JSON_API, $data, $context);
    }

    /**
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     */
    private function buildContext(array $additionalHeaders): Context
    {
        $contextBuilder = $this->contextBuilderFactory->createContextBuilder();
        $contextBuilder->withAdditionalHeaders($additionalHeaders);

        return $contextBuilder->build();
    }

    private function buildPath(string $endpoint, array $params): string
    {
        $path = $endpoint;
        if (count($params) > 0) {
            $path .= '?' . http_build_query($params);
        }

        return $path;
    }
}
