<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Context;

use Vin\ShopwareSdk\Auth\AccessTokenProvider;

final class ContextBuilderFactory implements ContextBuilderFactoryInterface
{
    public function __construct(
        private readonly string $shopUrl,
        private readonly AccessTokenProvider $accessTokenProvider
    ) {
    }

    public function createContextBuilder(): ContextBuilder
    {
        return new ContextBuilder($this->shopUrl, $this->accessTokenProvider);
    }
}
