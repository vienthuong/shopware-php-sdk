<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Response;

class OpenModalResponse extends ActionButtonResponse
{
    public const SMALL_SIZE = 'small';

    public const MEDIUM_SIZE = 'medium';

    public const LARGE_SIZE = 'large';

    public const FULLSCREEN = 'fullscreen';

    public function __construct(string $appSecret, string $url, string $size = self::LARGE_SIZE, bool $expand = false)
    {
        parent::__construct($appSecret, [
            'actionType' => self::ACTION_OPEN_MODAL,
            'payload' => [
                'iframeUrl' => $url,
                'size' => $size,
                'expand' => $expand,
            ],
        ]);
    }
}
