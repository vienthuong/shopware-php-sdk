<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http;

use Psr\Http\Message\RequestInterface;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Http\Struct\MediaType;

interface RequestFactoryInterface
{
    public function createRequest(string $method, string $endpoint, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context): RequestInterface;

    public function createRequestWithData(string $method, string $endpoint, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context): RequestInterface;

    /**
     * @param string|resource $data
     */
    public function createRequestWithGenericData(string $method, string $endpoint, MediaType $contentTypeHeader, MediaType $acceptHeader, $data, Context $context): RequestInterface;
}
