<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Client;
use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Data\Context;

class ApiService
{
    use CreateClientTrait;

    protected Context $context;

    protected string $contentType;

    public function __construct(Context $context, string $contentType = 'application/vnd.api+json', ?Client $httpClient = null)
    {
        $this->httpClient = $httpClient ?? $this->createHttpClient();
        $this->context = $context;
        $this->contentType = $contentType;
    }

    protected function get(string $endpoint, array $additionalHeaders = []): ApiResponse
    {
        $response = $this->httpClient->get($endpoint, [
            'headers' => $this->getBasicHeaders($additionalHeaders)
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    protected function post(string $endpoint, array $data, array $additionalHeaders = []): ApiResponse
    {
        $response = $this->httpClient->post($endpoint, [
            'form_params' => $data,
            'headers' => $this->getBasicHeaders($additionalHeaders)
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    protected function getBasicHeaders(array $additionalHeaders = []): array
    {
        $basicHeaders = [
            'Accept' => $this->contentType,
            'Authorization' => 'Bearer ' . $this->context->accessToken->accessToken,
            'Content-Type' => 'application/json'
        ];

        return array_merge($basicHeaders, $additionalHeaders);
    }

    protected function getFullUrl(string $path): string
    {
        return $this->context->apiEndpoint . $path;
    }

    protected static function handleResponse(string $data, array $headers): array
    {
        try {
            return \json_decode($data, true) ?? [];
        } catch (\Throwable $exception) {
            return [];
        }
    }

    protected static function getVersionHeader(string $versionId): array
    {
        return ['sw-version-id' => $versionId];
    }
}
