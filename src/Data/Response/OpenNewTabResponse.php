<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Response;

class OpenNewTabResponse extends ActionButtonResponse
{
    public function __construct(string $appSecret, string $redirectUrl)
    {
        parent::__construct($appSecret, [
            'actionType' => self::ACTION_OPEN_NEW_TAB,
            'payload' => [
                'redirectUrl' => $redirectUrl,
            ],
        ]);
    }
}
