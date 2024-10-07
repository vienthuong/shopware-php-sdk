<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;

interface SyncServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function sync(SyncPayload $payload, array $additionalParams = [], array $additionalHeaders = []): ApiResponse;
}
