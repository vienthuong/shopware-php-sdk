<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\KeyValuePair;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

class SystemConfigService extends ApiService
{
    public const SYSTEM_CONFIG_CHECK_ENDPOINT = '/api/_action/system-config/check';

    public const SYSTEM_CONFIG_GET_ENDPOINT = '/api/_action/system-config/schema';

    public const SYSTEM_CONFIG_GET_VALUES_ENDPOINT = '/api/_action/system-config';

    public const SYSTEM_CONFIG_SAVE_ENDPOINT = '/api/_action/system-config';

    public const SYSTEM_CONFIG_SAVE_BATCH_ENDPOINT = '/api/_action/system-config/batch';

    public function checkConfiguration(string $domain, array $additionalHeaders = []): ApiResponse
    {
        try {
            $response = $this->httpClient->get($this->buildQueryUrl(self::SYSTEM_CONFIG_CHECK_ENDPOINT, ['domain' => $domain]), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function getConfiguration(string $domain, array $additionalHeaders = []): ApiResponse
    {
        try {
            $response = $this->httpClient->get($this->buildQueryUrl(self::SYSTEM_CONFIG_GET_ENDPOINT, ['domain' => $domain]), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function getConfigurationValues(string $domain, ?string $salesChannelId = null, array $additionalHeaders = []): ApiResponse
    {
        try {
            $response = $this->httpClient->get(
                $this->buildQueryUrl(self::SYSTEM_CONFIG_GET_VALUES_ENDPOINT, array_filter(['domain' => $domain, 'salesChannelId' => $salesChannelId])),
                [
                    'headers' => $this->getBasicHeaders($additionalHeaders)
                ]
            );

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function save(KeyValuePair $configuration, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        try {
            $response = $this->httpClient->post(
                $this->buildQueryUrl(self::SYSTEM_CONFIG_SAVE_ENDPOINT, array_filter(['salesChannelId' => $salesChannelId])),
                [
                    'headers' => $this->getBasicHeaders($additionalHeaders),
                    'body' => json_encode(array_merge([$configuration->getKey() => $configuration->getValue()], $additionalParams))
                ]
            );

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function batchSave(KeyValuePairs $configs, ?string $salesChannelId = null, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        $parsed = [];

        /** @var KeyValuePair $item */
        foreach ($configs as $item) {
            $parsed[$salesChannelId ?? 'null'] = [$item->getKey() => $item->getValue()];
        }

        try {
            $response = $this->httpClient->post($this->getFullUrl(self::SYSTEM_CONFIG_SAVE_BATCH_ENDPOINT), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
                'body' => json_encode(array_merge($parsed, $additionalParams))
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()->getBody()->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
