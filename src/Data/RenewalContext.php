<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

use Vin\ShopwareSdk\Client\AdminAuthenticator;
use Vin\ShopwareSdk\Client\GrantType\RefreshTokenGrantType;

/**
 * @property string $languageId
 * @property string $currencyId
 * @property string $versionId
 * @property bool $compatibility
 * @property bool $inheritance
 * @property AccessToken $accessToken
 * @property string $apiEndpoint
 * @property array $additionalHeaders
 */
class RenewableContext extends Context
{
    protected function checkRenewToken(): void
    {
        if (!$this->context->accessToken->isExpired()) {
            return;
        }

        $adminClient = new AdminAuthenticator(
            new RefreshTokenGrantType($this->context->accessToken->refreshToken),
            $this->context->apiEndpoint
        );

        $this->context->accessToken = $adminClient->fetchAccessToken();
    }

    function __get(string $name)
    {
        if($name === 'accessToken'){
            $this->checkRenewToken();
        }

        return parent::__get($name);
    }
}