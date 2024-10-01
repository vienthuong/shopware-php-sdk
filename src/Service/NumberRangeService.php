<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

/**
 * Class NumberRangeService
 * @package Vin\ShopwareSdk\Service
 */
class NumberRangeService extends ApiService
{
    public function reserve(string $type, ?string $salesChannelId, bool $preview, array $headers = []): ApiResponse
    {
        $path = sprintf('/api/_action/number-range/reserve/%s/%s', $type, $salesChannelId ?? '');

        $response = $this->httpClient->get($this->getFullUrl($path), [
            'query' => [
                'preview' => $preview,
            ],
            'headers' => $this->getBasicHeaders($headers),
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    public function previewPattern(string $type, ?string $pattern, array $headers = []): ApiResponse
    {
        $path = sprintf('/api/_action/number-range/preview-pattern/%s', $type);

        $response = $this->httpClient->get($this->getFullUrl($path), [
            'query' => [
                'pattern' => $pattern,
            ],
            'headers' => $this->getBasicHeaders($headers),
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }
}
