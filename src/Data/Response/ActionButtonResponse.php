<?php
declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Response;

abstract class ActionButtonResponse extends SdkResponse
{
    public const ACTION_SHOW_NOTIFICATION = 'notification';

    public const ACTION_RELOAD_DATA = 'reload';

    public const ACTION_OPEN_NEW_TAB = 'openNewTab';

    public const ACTION_OPEN_MODAL = 'openModal';

    public function __construct(string $appSecret, array $contents = [])
    {
        if (array_key_exists('actionType', $contents) && !array_key_exists('payload', $contents)) {
            $contents['payload'] = [];
        }

        $contentEncoded = (string) json_encode($contents) ?? '';

        parent::__construct(200, $this->withAppSecret($appSecret, $contentEncoded));

        $this->getBody()->write($contentEncoded);
    }

    private function withAppSecret(string $appSecret, string $contents): array
    {
        $signature = hash_hmac('sha256', $contents, $appSecret);

        /** @var ActionButtonResponse $withAppSecret */
        $withAppSecret = $this->withHeader('shopware-app-signature', $signature);

        return $withAppSecret->getHeaders();
    }
}
