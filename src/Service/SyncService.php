<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;

class SyncService extends ApiService
{
    private const SYNC_ENDPOINT = '/api/_action/sync';

    public function sync(SyncPayload $payload, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        try {
            $response = $this->httpClient->post($this->getFullUrl(self::SYNC_ENDPOINT), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
                'body' => json_encode(array_merge($payload->parse(), $additionalParams)),
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
