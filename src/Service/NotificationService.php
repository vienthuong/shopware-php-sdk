<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\Notification;
use Vin\ShopwareSdk\Service\Struct\NotificationCollection;

final class NotificationService implements NotificationServiceInterface
{
    private const NOTIFICATION_MESSAGE_ENDPOINT = '/api/notification/message';

    private const NOTIFICATION_ENDPOINT = '/api/notification';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
        private readonly Context $context
    ) {
    }

    public function fetchNotifications(?string $latestTimestamp = null, ?int $limit = 5, array $additionalParams = [], array $additionalHeaders = []): NotificationCollection
    {
        try {
            $params = [
                'latestTimestamp' => $latestTimestamp,
                'limit' => $limit,
            ];
            $params = array_merge($params, $additionalParams);
            $apiResponse = $this->apiService->get(self::NOTIFICATION_MESSAGE_ENDPOINT, $params, $additionalHeaders, $this->context);

            $collection = new NotificationCollection([], $apiResponse->getContents()['timestamp']);

            if (empty($apiResponse->getContents()['notifications'])) {
                return $collection;
            }

            foreach ($apiResponse->getContents()['notifications'] as $notification) {
                $collection->add(Notification::create($notification['status'], $notification['message'], $notification['adminOnly'], $notification['requiredPrivileges']));
            }

            return $collection;
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function sendNotification(Notification $notification, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        try {
            /** @var string $data */
            $data = json_encode(array_merge($notification->parse(), $additionalParams));

            return $this->apiService->post(self::NOTIFICATION_ENDPOINT, [], $data, $additionalHeaders, $this->context);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
