<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\Config;
use Vin\ShopwareSdk\Service\Struct\ConfigCollection;

final class SystemConfigService implements SystemConfigServiceInterface
{
    public const SYSTEM_CONFIG_CHECK_ENDPOINT = '/api/_action/system-config/check';

    public const SYSTEM_CONFIG_GET_ENDPOINT = '/api/_action/system-config/schema';

    public const SYSTEM_CONFIG_GET_VALUES_ENDPOINT = '/api/_action/system-config';

    public const SYSTEM_CONFIG_SAVE_ENDPOINT = '/api/_action/system-config';

    public const SYSTEM_CONFIG_SAVE_BATCH_ENDPOINT = '/api/_action/system-config/batch';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function batchSave(ConfigCollection $configs, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        $data = [
            $salesChannelId ?? 'null' => $configs->parse(),
        ];

        return $this->apiService->post(self::SYSTEM_CONFIG_SAVE_BATCH_ENDPOINT, data: $data, additionalHeaders: $additionalHeaders);
    }

    public function checkConfiguration(string $domain, array $additionalHeaders = []): ApiResponse
    {
        $params = [
            'domain' => $domain,
        ];

        return $this->apiService->get(self::SYSTEM_CONFIG_CHECK_ENDPOINT, $params, additionalHeaders: $additionalHeaders);
    }

    public function getConfiguration(string $domain, array $additionalHeaders = []): ApiResponse
    {
        $params = [
            'domain' => $domain,
        ];

        return $this->apiService->get(self::SYSTEM_CONFIG_GET_ENDPOINT, $params, additionalHeaders: $additionalHeaders);
    }

    public function getConfigurationValues(string $domain, ?string $salesChannelId = null, array $additionalHeaders = []): ApiResponse
    {
        $params = [
            'domain' => $domain,
            'salesChannelId' => $salesChannelId,
        ];
        $params = array_filter($params);

        return $this->apiService->get(self::SYSTEM_CONFIG_GET_VALUES_ENDPOINT, $params, additionalHeaders: $additionalHeaders);
    }

    public function save(Config $configuration, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        $params = [
            'salesChannelId' => $salesChannelId,
        ];
        $params = array_filter($params);

        $data = [
            $configuration->getKey() => $configuration->getValue(),
        ];

        return $this->apiService->post(self::SYSTEM_CONFIG_SAVE_ENDPOINT, $params, $data, additionalHeaders: $additionalHeaders);
    }
}
