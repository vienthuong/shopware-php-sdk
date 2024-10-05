<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Data\Context;

final class ApiService implements ApiServiceInterface
{
    use CreateClientTrait;

    public function __construct(
        protected ?Context $context = null,
        protected string $contentType = 'application/vnd.api+json'
    ) {
        $this->httpClient ??= $this->createHttpClient();
    }

    public function delete(string $endpoint, array $params, array $additionalHeaders, Context $context): ApiResponse
    {
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->delete($url, [
            'headers' => $this->getBasicHeaders($context, $additionalHeaders),
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    public function get(string $endpoint, array $params, array $additionalHeaders, Context $context): ApiResponse
    {
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->get($url, [
            'headers' => $this->getBasicHeaders($context, $additionalHeaders),
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    public function patch(string $endpoint, array $params, $data, array $additionalHeaders, Context $context): ApiResponse
    {
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->patch($url, [
            'headers' => $this->getBasicHeaders($context, $additionalHeaders),
            'body' => $data,
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    public function post(string $endpoint, array $params, $data, array $additionalHeaders, Context $context): ApiResponse
    {
        $url = $this->buildUrl($endpoint, $params, $context);
        $response = $this->httpClient->post($url, [
            'headers' => $this->getBasicHeaders($context, $additionalHeaders),
            'body' => $data,
        ]);

        $contents = \json_decode($response->getBody()->getContents(), true) ?? [];

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    private function buildUrl(string $endpoint, array $params, Context $context): string
    {
        $url = $context->apiEndpoint . $endpoint;

        if (count($params) > 0) {
            $url .= '?' . http_build_query($params);
        }

        return $url;
    }

    private function getBasicHeaders(Context $context, array $additionalHeaders = []): array
    {
        $basicHeaders = [
            'Accept' => $this->contentType,
            'Authorization' => 'Bearer ' . $context->accessToken->accessToken,
            'Content-Type' => 'application/json',
        ];
        $basicHeaders = array_merge($basicHeaders, $context->additionalHeaders, $additionalHeaders);

        return array_filter($basicHeaders);
    }
}
