<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Struct\ApiResponse;

interface NumberRangeServiceInterface
{
    public function previewPattern(string $type, ?string $pattern, array $additionalHeaders = []): ApiResponse;

    public function reserve(string $type, ?string $salesChannelId, bool $preview, array $additionalHeaders = []): ApiResponse;
}
