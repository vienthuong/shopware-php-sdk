<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Data\Context;

class ApiService
{
    use CreateClientTrait;

    /**
     * @deprecated tag v2.0.0 - $context will be remove, use setContext method instead
     */
    public function __construct(
        protected ?Context $context = null,
        protected string $contentType = 'application/vnd.api+json'
    ) {
        $this->httpClient ??= $this->createHttpClient();
    }

    public function setContext(Context $context): self
    {
        $this->context = $context;

        return $this;
    }

    protected function get(string $endpoint, array $additionalHeaders = []): ApiResponse
    {
        $response = $this->httpClient->get($endpoint, [
            'headers' => $this->getBasicHeaders($additionalHeaders),
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    protected function post(string $endpoint, array $data, array $additionalHeaders = []): ApiResponse
    {
        $response = $this->httpClient->post($endpoint, [
            'form_params' => $data,
            'headers' => $this->getBasicHeaders($additionalHeaders),
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    protected function getBasicHeaders(array $additionalHeaders = []): array
    {
        /** @var Context|null $context */
        $context = $this->context;

        if ($context === null) {
            throw new \Exception('Please call setContext method before sending the request');
        }

        $basicHeaders = array_merge([
            'Accept' => $this->contentType,
            'Authorization' => 'Bearer ' . $context->accessToken->accessToken,
            'Content-Type' => 'application/json',
        ], $context->additionalHeaders);

        return array_merge($basicHeaders, $additionalHeaders);
    }

    protected function getFullUrl(string $path): string
    {
        /** @var Context|null $context */
        $context = $this->context;

        if ($context === null) {
            throw new \Exception('Please call setContext method before sending the request');
        }

        return $context->apiEndpoint . $path;
    }

    protected function buildQueryUrl(string $path, array $queries): string
    {
        /** @var Context|null $context */
        $context = $this->context;

        if ($context === null) {
            throw new \Exception('Please call setContext method before sending the request');
        }

        return $context->apiEndpoint . $path . '?' . http_build_query($queries);
    }

    protected static function handleResponse(string $data, array $headers): array
    {
        return \json_decode($data, true) ?? [];
    }

    protected static function getVersionHeader(string $versionId): array
    {
        return [
            'sw-version-id' => $versionId,
        ];
    }
}
