<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

interface UserConfigServiceInterface
{
    /**
     * @throws ShopwareResponseException
     */
    public function getConfigMe(array $keys, array $additionalHeaders = []): KeyValuePairs;

    /**
     * @throws ShopwareResponseException
     */
    public function saveConfigMe(KeyValuePairs $configs, array $additionalParams = [], array $additionalHeaders = []): ApiResponse;
}
