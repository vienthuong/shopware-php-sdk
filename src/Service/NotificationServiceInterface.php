<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\Notification;
use Vin\ShopwareSdk\Service\Struct\NotificationCollection;

interface NotificationServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function fetchNotifications(?string $latestTimestamp = null, ?int $limit = 5, array $additionalParams = [], array $additionalHeaders = []): NotificationCollection;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function sendNotification(Notification $notification, array $additionalParams = [], array $additionalHeaders = []): ApiResponse;
}
