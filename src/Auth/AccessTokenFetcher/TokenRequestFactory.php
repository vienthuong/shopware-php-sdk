<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Auth\AccessTokenFetcher;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

final class TokenRequestFactory implements TokenRequestFactoryInterface
{
    public function __construct(
        private readonly StreamFactoryInterface $streamFactory,
        private readonly RequestFactoryInterface $requestFactory,
    ) {
    }

    public function createRequest(string $uri, array $data): RequestInterface
    {
        /** @var string $data */
        $data = json_encode($data);
        $body = $this->streamFactory->createStream($data);

        return $this->requestFactory->createRequest('POST', $uri)
            ->withHeader('Accept', 'application/json')
            ->withHeader('Content-Type', 'application/json')
            ->withBody($body);
    }
}
