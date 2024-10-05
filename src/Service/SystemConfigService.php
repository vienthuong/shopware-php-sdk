<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\KeyValuePair;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

final class SystemConfigService implements SystemConfigServiceInterface
{
    public const SYSTEM_CONFIG_CHECK_ENDPOINT = '/api/_action/system-config/check';

    public const SYSTEM_CONFIG_GET_ENDPOINT = '/api/_action/system-config/schema';

    public const SYSTEM_CONFIG_GET_VALUES_ENDPOINT = '/api/_action/system-config';

    public const SYSTEM_CONFIG_SAVE_ENDPOINT = '/api/_action/system-config';

    public const SYSTEM_CONFIG_SAVE_BATCH_ENDPOINT = '/api/_action/system-config/batch';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
        private readonly Context $context,
    ) {
    }

    public function batchSave(KeyValuePairs $configs, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        $parsed = [];
        foreach ($configs as $item) {
            $parsed[$salesChannelId ?? 'null'] = [
                $item->getKey() => $item->getValue(),
            ];
        }
        $data = array_merge($parsed, $additionalParams);
        /** @var string $data */
        $data = json_encode($data);

        try {
            return $this->apiService->post(self::SYSTEM_CONFIG_SAVE_BATCH_ENDPOINT, [], $data, $additionalHeaders, $this->context);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function checkConfiguration(string $domain, array $additionalHeaders = []): ApiResponse
    {
        try {
            $params = [
                'domain' => $domain,
            ];

            return $this->apiService->get(self::SYSTEM_CONFIG_CHECK_ENDPOINT, $params, $additionalHeaders, $this->context);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function getConfiguration(string $domain, array $additionalHeaders = []): ApiResponse
    {
        try {
            $params = [
                'domain' => $domain,
            ];

            return $this->apiService->get(self::SYSTEM_CONFIG_GET_ENDPOINT, $params, $additionalHeaders, $this->context);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function getConfigurationValues(string $domain, ?string $salesChannelId = null, array $additionalHeaders = []): ApiResponse
    {
        try {
            $params = [
                'domain' => $domain,
                'salesChannelId' => $salesChannelId,
            ];
            $params = array_filter($params);

            return $this->apiService->get(self::SYSTEM_CONFIG_GET_VALUES_ENDPOINT, $params, $additionalHeaders, $this->context);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function save(KeyValuePair $configuration, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        try {
            $params = [
                'salesChannelId' => $salesChannelId,
            ];
            $params = array_filter($params);

            $data = [
                $configuration->getKey() => $configuration->getValue(),
            ];
            $data = array_merge($data, $additionalParams);
            /** @var string $data */
            $data = json_encode($data);

            return $this->apiService->post(self::SYSTEM_CONFIG_SAVE_ENDPOINT, $params, $data, $additionalHeaders, $this->context);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
