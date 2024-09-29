<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\Notification;
use Vin\ShopwareSdk\Service\Struct\NotificationCollection;

class NotificationService extends ApiService
{
    private const NOTIFICATION_ENDPOINT = '/api/notification';

    private const NOTIFICATION_MESSAGE_ENDPOINT = '/api/notification/message';

    public function sendNotification(Notification $notification, array $additionalParams = [], array $additionalHeaders = []): ApiResponse
    {
        try {
            $response = $this->httpClient->post($this->getFullUrl(self::NOTIFICATION_ENDPOINT), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
                'body' => json_encode(array_merge($notification->parse(), $additionalParams)),
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

    public function fetchNotification(?string $latestTimestamp = null, ?int $limit = 5, array $additionalParams = [], array $additionalHeaders = []): NotificationCollection
    {
        try {
            $response = $this->httpClient->get($this->getFullUrl(self::NOTIFICATION_MESSAGE_ENDPOINT), [
                'headers' => $this->getBasicHeaders($additionalHeaders),
                'body' => json_encode(array_merge([
                    'latestTimestamp' => $latestTimestamp,
                    'limit' => $limit,
                ], $additionalParams)),
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            $collection = new NotificationCollection([], $contents['timestamp']);

            if (empty($contents['notifications'])) {
                return $collection;
            }

            foreach ($contents['notifications'] as $notification) {
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
}
