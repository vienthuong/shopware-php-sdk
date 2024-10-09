<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\Config;
use Vin\ShopwareSdk\Service\Struct\ConfigCollection;

interface SystemConfigServiceInterface
{
    /**
     * @throws ShopwareResponseException
     */
    public function batchSave(ConfigCollection $configs, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse;

    /**
     * @throws ShopwareResponseException
     */
    public function checkConfiguration(string $domain, array $additionalHeaders = []): ApiResponse;

    /**
     * @throws ShopwareResponseException
     */
    public function getConfiguration(string $domain, array $additionalHeaders = []): ApiResponse;

    /**
     * @throws ShopwareResponseException
     */
    public function getConfigurationValues(string $domain, ?string $salesChannelId = null, array $additionalHeaders = []): ApiResponse;

    /**
     * @throws ShopwareResponseException
     */
    public function save(Config $configuration, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse;
}
