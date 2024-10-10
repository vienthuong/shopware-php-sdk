<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;

final class SyncService implements SyncServiceInterface
{
    private const SYNC_ENDPOINT = '/api/_action/sync';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function sync(SyncPayload $payload, array $additionalHeaders = []): ApiResponse
    {
        return $this->apiService->post(self::SYNC_ENDPOINT, data: $payload->parse(), additionalHeaders: $additionalHeaders);
    }
}
