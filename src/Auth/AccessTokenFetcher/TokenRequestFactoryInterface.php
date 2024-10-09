<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenFetcher;

use Psr\Http\Message\RequestInterface;
use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;
use Vin\ShopwareSdk\Auth\GrantType\RefreshTokenGrantType;

/**
 * @phpstan-import-type ClientCredentialsGrantData from ClientCredentialsGrantType
 * @phpstan-import-type PasswordGrantData from PasswordGrantType
 * @phpstan-import-type RefreshTokenGrantData from RefreshTokenGrantType
 */
interface TokenRequestFactoryInterface
{
    /**
     * @param ClientCredentialsGrantData|PasswordGrantData|RefreshTokenGrantData $data
     */
    public function createRequest(string $uri, array $data): RequestInterface;
}
