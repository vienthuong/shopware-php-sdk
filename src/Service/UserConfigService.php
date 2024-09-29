<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\KeyValuePair;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

class UserConfigService extends ApiService
{
    private const USER_CONFIG_ENDPOINT = '/api/_info/config-me';

    public function getConfigMe(array $keys, array $additionalHeaders = []): KeyValuePairs
    {
        try {
            $response = $this->httpClient->get($this->getFullUrl(self::USER_CONFIG_ENDPOINT), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
                'query' => [
                    'keys' => $keys,
                ],
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            $data = new KeyValuePairs();

            if (empty($contents['data'])) {
                return $data;
            }

            foreach ($contents['data'] as $key => $value) {
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

        /** @var KeyValuePair $item */
        foreach ($configs as $item) {
            $parsed[$item->getKey()] = $item->getValue();
        }

        try {
            $response = $this->httpClient->post($this->getFullUrl(self::USER_CONFIG_ENDPOINT), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
                'body' => json_encode(array_merge($parsed, $additionalParams)),
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
