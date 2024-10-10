<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

interface NumberRangeServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     */
    public function previewPattern(string $type, ?string $pattern, array $additionalHeaders = []): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     */
    public function reserve(string $type, ?string $salesChannelId, bool $preview, array $additionalHeaders = []): ApiResponse;
}
