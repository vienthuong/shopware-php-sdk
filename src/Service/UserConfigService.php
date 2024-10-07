<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\KeyValuePair;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

final class UserConfigService implements UserConfigServiceInterface
{
    private const USER_CONFIG_ENDPOINT = '/api/_info/config-me';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function getConfigMe(array $keys, array $additionalHeaders = []): KeyValuePairs
    {
        try {
            $params = [
                'keys' => $keys,
            ];

            $apiResponse = $this->apiService->get(self::USER_CONFIG_ENDPOINT, $params, $additionalHeaders);

            $data = new KeyValuePairs();

            if (empty($apiResponse->getContents()['data'])) {
                return $data;
            }

            foreach ($apiResponse->getContents()['data'] as $key => $value) {
                $data->add(KeyValuePair::create($key, $value));
            }

            return $data;
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function saveConfigMe(KeyValuePairs $configs, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        $parsed = [];
        foreach ($configs as $item) {
            $parsed[$item->getKey()] = $item->getValue();
        }
        $data = array_merge($parsed, $additionalParams);
        /** @var string $data */
        $data = json_encode($data);

        try {
            return $this->apiService->post(self::USER_CONFIG_ENDPOINT, [], $data, $additionalHeaders);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
