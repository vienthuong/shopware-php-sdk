<?php
declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Response;

class NotificationResponse extends ActionButtonResponse
{
    public const SUCCESS = 'success';

    public const WARNING = 'warning';

    public const ERROR = 'error';

    public const INFO = 'info';

    public function __construct(string $appSecret, string $message, string $status = self::ERROR)
    {
        parent::__construct($appSecret, [
            'actionType' => self::ACTION_SHOW_NOTIFICATION,
            'payload' => [
                'status' => $status,
                'message' => $message,
            ],
        ]);
    }
}
