<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\Notification;
use Vin\ShopwareSdk\Service\Struct\NotificationCollection;

final class NotificationService implements NotificationServiceInterface
{
    private const NOTIFICATION_MESSAGE_ENDPOINT = '/api/notification/message';

    private const NOTIFICATION_ENDPOINT = '/api/notification';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function fetchNotifications(?string $latestTimestamp = null, ?int $limit = 5, array $additionalParams = [], array $additionalHeaders = []): NotificationCollection
    {
        $params = [
            'latestTimestamp' => $latestTimestamp,
            'limit' => $limit,
        ];
        $params = array_merge($params, $additionalParams);

        $apiResponse = $this->apiService->get(self::NOTIFICATION_MESSAGE_ENDPOINT, $params, additionalHeaders: $additionalHeaders);

        $collection = new NotificationCollection([], $apiResponse->getContents()['timestamp']);
        foreach ($apiResponse->getContents()['notifications'] ?? [] as $notification) {
            $collection->add(Notification::create($notification['status'], $notification['message'], $notification['adminOnly'], $notification['requiredPrivileges']));
        }

        return $collection;
    }

    public function sendNotification(Notification $notification, array $additionalHeaders = []): ApiResponse
    {
        return $this->apiService->post(self::NOTIFICATION_ENDPOINT, data: $notification->parse(), additionalHeaders: $additionalHeaders);
    }
}
