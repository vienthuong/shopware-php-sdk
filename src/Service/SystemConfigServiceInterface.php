<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\KeyValuePair;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

interface SystemConfigServiceInterface
{
    /**
     * @throws ShopwareResponseException
     */
    public function batchSave(KeyValuePairs $configs, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse;

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
    public function save(KeyValuePair $configuration, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse;
}
