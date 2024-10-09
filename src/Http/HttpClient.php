<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\ShopwareRequestException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Http\Struct\MediaType;

final class HttpClient implements HttpClientInterface
{
    public function __construct(
        private readonly RequestFactoryInterface $requestFactory,
        private readonly ResponseParserInterface $responseParser,
        private readonly ClientInterface $psr18HttpClient,
    ) {
    }

    public function delete(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context): ApiResponse
    {
        $request = $this->requestFactory->createRequest('DELETE', $path, $contentTypeHeader, $acceptHeader, $context);

        try {
            $response = $this->psr18HttpClient->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new ShopwareRequestException($clientException, $request);
        }

        return new ApiResponse(
            $this->responseParser->getDecodedResponseContent($response),
            $response->getHeaders(),
            $response->getStatusCode(),
            $context
        );
    }

    public function get(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context): ApiResponse
    {
        $request = $this->requestFactory->createRequest('GET', $path, $contentTypeHeader, $acceptHeader, $context);

        try {
            $response = $this->psr18HttpClient->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new ShopwareRequestException($clientException, $request);
        }

        return new ApiResponse(
            $this->responseParser->getDecodedResponseContent($response),
            $response->getHeaders(),
            $response->getStatusCode(),
            $context
        );
    }

    public function patch(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context): ApiResponse
    {
        $request = $this->requestFactory->createRequestWithData('PATCH', $path, $contentTypeHeader, $acceptHeader, $data, $context);

        try {
            $response = $this->psr18HttpClient->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new ShopwareRequestException($clientException, $request);
        }

        return new ApiResponse(
            $this->responseParser->getDecodedResponseContent($response),
            $response->getHeaders(),
            $response->getStatusCode(),
            $context
        );
    }

    public function post(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, ?array $data, Context $context): ApiResponse
    {
        $request = $this->requestFactory->createRequestWithData('POST', $path, $contentTypeHeader, $acceptHeader, $data ?? [], $context);

        try {
            $response = $this->psr18HttpClient->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new ShopwareRequestException($clientException, $request);
        }

        return new ApiResponse(
            $this->responseParser->getDecodedResponseContent($response),
            $response->getHeaders(),
            $response->getStatusCode(),
            $context
        );
    }

    public function postGenericData(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, $data, Context $context): ApiResponse
    {
        $request = $this->requestFactory->createRequestWithGenericData('POST', $path, $contentTypeHeader, $acceptHeader, $data, $context);

        try {
            $response = $this->psr18HttpClient->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new ShopwareRequestException($clientException, $request);
        }

        return new ApiResponse(
            $this->responseParser->getDecodedResponseContent($response),
            $response->getHeaders(),
            $response->getStatusCode(),
            $context
        );
    }
}
