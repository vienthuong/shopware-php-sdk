<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http;

use Psr\Http\Message\RequestFactoryInterface as PsrRequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Http\Struct\MediaType;

final class RequestFactory implements RequestFactoryInterface
{
    public function __construct(
        private readonly StreamFactoryInterface $streamFactory,
        private readonly PsrRequestFactoryInterface $requestFactory
    ) {
    }

    public function createRequest(string $method, string $endpoint, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context): RequestInterface
    {
        $url = $context->apiEndpoint . $endpoint;

        $accessToken = $context->accessToken;

        $headers = [
            'Authorization' => $accessToken->tokenType . ' ' . $accessToken->accessToken,
            'sw-language-id' => $context->languageId,
            'sw-currency-id' => $context->currencyId,
            'sw-version-id' => $context->versionId,
            'sw-inheritance' => $context->inheritance,
            'sw-api-compatibility' => $context->compatibility,
        ];
        $headers = array_merge(
            $headers,
            $context->additionalHeaders,
            [
                'Content-Type' => $contentTypeHeader->value,
                'Accept' => $acceptHeader->value,
            ]
        );
        $headers = array_filter($headers);

        $request = $this->requestFactory->createRequest($method, $url);
        foreach ($headers as $key => $value) {
            $request = $request->withHeader($key, (string) $value);
        }

        return $request;
    }

    public function createRequestWithData(string $method, string $endpoint, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context): RequestInterface
    {
        $request = $this->createRequest($method, $endpoint, $contentTypeHeader, $acceptHeader, $context);
        if ($data === []) {
            return $request;
        }

        /** @var string $encodedBody */
        $encodedBody = json_encode($data);
        $body = $this->streamFactory->createStream($encodedBody);

        return $request->withBody($body);
    }

    public function createRequestWithGenericData(string $method, string $endpoint, MediaType $contentTypeHeader, MediaType $acceptHeader, $data, Context $context): RequestInterface
    {
        $request = $this->createRequest($method, $endpoint, $contentTypeHeader, $acceptHeader, $context);

        if (is_string($data)) {
            $body = $this->streamFactory->createStream($data);

            return $request->withBody($body);
        }
        if (is_resource($data)) {
            $body = $this->streamFactory->createStreamFromResource($data);

            return $request->withBody($body);
        }

        throw new \RuntimeException('Data must be a string or a resource');
    }
}
