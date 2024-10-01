<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Response;

class ReloadDataResponse extends ActionButtonResponse
{
    public function __construct(string $appSecret)
    {
        parent::__construct($appSecret, [
            'actionType' => self::ACTION_RELOAD_DATA,
        ]);
    }
}
