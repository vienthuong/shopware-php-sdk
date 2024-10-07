<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Struct\ApiResponse;

final class NumberRangeService implements NumberRangeServiceInterface
{
    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function reserve(string $type, ?string $salesChannelId, bool $preview, array $additionalHeaders = []): ApiResponse
    {
        $path = sprintf('/api/_action/number-range/reserve/%s/%s', $type, $salesChannelId ?? '');

        return $this->apiService->get($path, [
            'preview' => $preview,
        ], $additionalHeaders);
    }

    public function previewPattern(string $type, ?string $pattern, array $additionalHeaders = []): ApiResponse
    {
        $path = sprintf('/api/_action/number-range/preview-pattern/%s', $type);

        return $this->apiService->get($path, [
            'pattern' => $pattern,
        ], $additionalHeaders);
    }
}
