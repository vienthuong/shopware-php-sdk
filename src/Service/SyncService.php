<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;

final class SyncService implements SyncServiceInterface
{
    private const SYNC_ENDPOINT = '/api/_action/sync';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
        private readonly Context $context,
    ) {
    }

    public function sync(SyncPayload $payload, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        try {
            $data = $payload->parse();
            $data = array_merge($data, $additionalParams);
            /** @var string $data */
            $data = json_encode($data);

            return $this->apiService->post(self::SYNC_ENDPOINT, [], $data, $additionalHeaders, $this->context);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
