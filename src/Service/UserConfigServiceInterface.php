<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\ConfigCollection;

interface UserConfigServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function getConfigMe(array $keys, array $additionalHeaders = []): ConfigCollection;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function saveConfigMe(ConfigCollection $configs, array $additionalHeaders = []): ApiResponse;
}
