<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

final class NumberRangeService implements NumberRangeServiceInterface
{
    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function reserve(string $type, ?string $salesChannelId, bool $preview, array $additionalHeaders = []): ApiResponse
    {
        $endpoint = sprintf('/api/_action/number-range/reserve/%s/%s', $type, $salesChannelId ?? '');
        $params = [
            'preview' => $preview,
        ];

        return $this->apiService->get($endpoint, $params, additionalHeaders: $additionalHeaders);
    }

    public function previewPattern(string $type, ?string $pattern, array $additionalHeaders = []): ApiResponse
    {
        $endpoint = sprintf('/api/_action/number-range/preview-pattern/%s', $type);
        $params = [
            'pattern' => $pattern,
        ];

        return $this->apiService->get($endpoint, $params, additionalHeaders: $additionalHeaders);
    }
}
