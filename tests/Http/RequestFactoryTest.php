<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Http;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestFactoryInterface as PsrRequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Http\RequestFactory;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Http\Struct\MediaType;

#[CoversClass(RequestFactory::class)]
#[CoversClass(ApiResponse::class)]
#[CoversClass(MediaType::class)]
final class RequestFactoryTest extends TestCase
{
    public static function createRequestWithDataProvider(): \Generator
    {
        $apiEndpoint = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $context = new Context($apiEndpoint, $accessToken);

        $contentType = MediaType::APPLICATION_JSON;
        $acceptHeader = MediaType::APPLICATION_JSON_API;

        $expectedHeaders = self::buildExcpectedHeaders($accessToken, $context, $contentType, $acceptHeader);

        yield [
            'GET',
            '/api/product',
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            [
                'test' => 'test',
            ],
            $context,
            $expectedHeaders,
        ];
    }

    public static function createRequestWithEmptyDataProvider(): \Generator
    {
        $apiEndpoint = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $context = new Context($apiEndpoint, $accessToken);

        $contentType = MediaType::APPLICATION_JSON;
        $acceptHeader = MediaType::APPLICATION_JSON_API;

        $expectedHeaders = self::buildExcpectedHeaders($accessToken, $context, $contentType, $acceptHeader);

        yield [
            'GET',
            '/api/product',
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $context,
            $expectedHeaders,
        ];
    }

    public static function createRequestWithGenericDataProvider(): \Generator
    {
        $apiEndpoint = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $context = new Context($apiEndpoint, $accessToken);

        $contentType = MediaType::APPLICATION_JSON;
        $acceptHeader = MediaType::APPLICATION_JSON_API;

        $expectedHeaders = self::buildExcpectedHeaders($accessToken, $context, $contentType, $acceptHeader);

        yield 'with string data' => [
            'GET',
            '/api/product',
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            'BLUB',
            $context,
            $expectedHeaders,
        ];

        yield 'with resource data' => [
            'GET',
            '/api/product',
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            fopen('php://temp', 'r+'),
            $context,
            $expectedHeaders,
        ];
    }

    public static function createRequestWithInvalidDataProvider(): \Generator
    {
        $apiEndpoint = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $context = new Context($apiEndpoint, $accessToken);

        $contentType = MediaType::APPLICATION_JSON;
        $acceptHeader = MediaType::APPLICATION_JSON_API;

        $expectedHeaders = self::buildExcpectedHeaders($accessToken, $context, $contentType, $acceptHeader);

        yield [
            'GET',
            '/api/product',
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $context,
            $expectedHeaders,
        ];
    }

    #[DataProvider('createRequestWithDataProvider')]
    public function testCreateRequestWithData(
        string $method,
        string $endpoint,
        MediaType $contentTypeHeader,
        MediaType $acceptHeader,
        array $data,
        Context $context,
        array $expectedHeaders
    ): void {
        $stream = $this->createMock(StreamInterface::class);

        $request = $this->createMock(RequestInterface::class);
        $this->addWithHeaderMethodAndAssertionsToRequest($request, $expectedHeaders);
        $this->addWithBodyMethodAndAssertionsToRequest($request, $stream);

        $streamFactory = $this->createMock(StreamFactoryInterface::class);
        $this->addCreateStreamMethodToStreamFactory($streamFactory, json_encode($data), $stream);

        $psrRequestFactory = $this->createMock(PsrRequestFactoryInterface::class);
        $this->addCreateRequestMethodAndAssertionsToPsrRequestFactory($psrRequestFactory, $method, $endpoint, $request);

        $requestFactory = new RequestFactory($streamFactory, $psrRequestFactory);

        $createdRequest = $requestFactory->createRequestWithData($method, $endpoint, $contentTypeHeader, $acceptHeader, $data, $context);
        $this->assertInstanceOf(RequestInterface::class, $createdRequest);
    }

    #[DataProvider('createRequestWithEmptyDataProvider')]
    public function testCreateRequestWithEmptyData(
        string $method,
        string $endpoint,
        MediaType $contentTypeHeader,
        MediaType $acceptHeader,
        Context $context,
        array $expectedHeaders
    ): void {
        $request = $this->createMock(RequestInterface::class);
        $this->addWithHeaderMethodAndAssertionsToRequest($request, $expectedHeaders);

        $streamFactory = $this->createMock(StreamFactoryInterface::class);

        $psrRequestFactory = $this->createMock(PsrRequestFactoryInterface::class);
        $this->addCreateRequestMethodAndAssertionsToPsrRequestFactory($psrRequestFactory, $method, $endpoint, $request);

        $requestFactory = new RequestFactory($streamFactory, $psrRequestFactory);

        $createdRequest = $requestFactory->createRequestWithData($method, $endpoint, $contentTypeHeader, $acceptHeader, [], $context);
        $this->assertInstanceOf(RequestInterface::class, $createdRequest);
    }

    #[DataProvider('createRequestWithGenericDataProvider')]
    public function testCreateRequestWithGenericData(
        string $method,
        string $endpoint,
        MediaType $contentTypeHeader,
        MediaType $acceptHeader,
        $data,
        Context $context,
        array $expectedHeaders
    ): void {
        $stream = $this->createMock(StreamInterface::class);

        $request = $this->createMock(RequestInterface::class);
        $this->addWithHeaderMethodAndAssertionsToRequest($request, $expectedHeaders);
        $this->addWithBodyMethodAndAssertionsToRequest($request, $stream);

        $streamFactory = $this->createMock(StreamFactoryInterface::class);
        if (is_string($data)) {
            $this->addCreateStreamMethodToStreamFactory($streamFactory, $data, $stream);
        }
        if (is_resource($data)) {
            $this->addCreateStreamFromResourceMethodToStreamFactory($streamFactory, $data, $stream);
        }

        $psrRequestFactory = $this->createMock(PsrRequestFactoryInterface::class);
        $this->addCreateRequestMethodAndAssertionsToPsrRequestFactory($psrRequestFactory, $method, $endpoint, $request);

        $requestFactory = new RequestFactory($streamFactory, $psrRequestFactory);

        $createdRequest = $requestFactory->createRequestWithGenericData($method, $endpoint, $contentTypeHeader, $acceptHeader, $data, $context);
        $this->assertInstanceOf(RequestInterface::class, $createdRequest);
    }

    #[DataProvider('createRequestWithInvalidDataProvider')]
    public function testCreateRequestWithInvalidData(
        string $method,
        string $endpoint,
        MediaType $contentTypeHeader,
        MediaType $acceptHeader,
        Context $context,
        array $expectedHeaders
    ): void {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Data must be a string or a resource');

        $request = $this->createMock(RequestInterface::class);
        $this->addWithHeaderMethodAndAssertionsToRequest($request, $expectedHeaders);

        $streamFactory = $this->createMock(StreamFactoryInterface::class);

        $psrRequestFactory = $this->createMock(PsrRequestFactoryInterface::class);
        $this->addCreateRequestMethodAndAssertionsToPsrRequestFactory($psrRequestFactory, $method, $endpoint, $request);

        $requestFactory = new RequestFactory($streamFactory, $psrRequestFactory);

        $requestFactory->createRequestWithGenericData($method, $endpoint, $contentTypeHeader, $acceptHeader, null, $context);
    }

    private static function buildExcpectedHeaders(AccessToken $accessToken, Context $context, MediaType $contentType, MediaType $acceptHeader): array
    {
        return [
            [
                'Authorization' => $accessToken->tokenType . ' ' . $accessToken->accessToken,
            ],
            [
                'sw-language-id' => $context->languageId,
            ],
            [
                'sw-currency-id' => $context->currencyId,
            ],
            [
                'sw-version-id' => $context->versionId,
            ],
            [
                'sw-inheritance' => $context->inheritance,
            ],
            [
                'sw-api-compatibility' => $context->compatibility,
            ],
            [
                'Content-Type' => $contentType->value,
            ],
            [
                'Accept' => $acceptHeader->value,
            ],
        ];
    }

    private function addCreateRequestMethodAndAssertionsToPsrRequestFactory(MockObject $psrRequestFactory, string $method, string $endpoint, RequestInterface $request): void
    {
        $psrRequestFactory->expects($this->once())
            ->method('createRequest')
            ->willReturnCallback(function ($passedMethod, $passedUri) use ($method, $endpoint, $request) {
                $this->assertEquals($method, $passedMethod);
                $this->assertStringEndsWith($endpoint, $passedUri);

                return $request;
            });
    }

    private function addCreateStreamMethodToStreamFactory(MockObject $streamFactory, string $data, StreamInterface $stream): void
    {
        $streamFactory->expects($this->once())
            ->method('createStream')
            ->willReturnCallback(function ($passedData) use ($data, $stream) {
                $this->assertEquals($data, $passedData);

                return $stream;
            });
    }

    private function addCreateStreamFromResourceMethodToStreamFactory(MockObject $streamFactory, $data, StreamInterface $stream): void
    {
        $streamFactory->expects($this->once())
            ->method('createStreamFromResource')
            ->willReturnCallback(function ($passedData) use ($data, $stream) {
                $this->assertEquals($data, $passedData);

                return $stream;
            });
    }

    private function addWithBodyMethodAndAssertionsToRequest(MockObject $request, StreamInterface $expectedStream): void
    {
        $request->expects($this->once())
            ->method('withBody')
            ->willReturnCallback(function ($passedStream) use ($expectedStream, $request) {
                $this->assertEquals($expectedStream, $passedStream);

                return $request;
            });
    }

    private function addWithHeaderMethodAndAssertionsToRequest(MockObject $request, array $expectedHeaders): void
    {
        $withHeaderMethodCall = 0;
        $request->expects($this->exactly(8))
            ->method('withHeader')
            ->willReturnCallback(function (string $name, $value) use ($expectedHeaders, &$withHeaderMethodCall, $request) {
                $this->assertEquals($expectedHeaders[$withHeaderMethodCall], [
                    $name => $value,
                ]);
                $withHeaderMethodCall++;

                return $request;
            });
    }
}
