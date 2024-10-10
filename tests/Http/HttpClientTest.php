<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Http;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\ShopwareRequestException;
use Vin\ShopwareSdk\Http\HttpClient;
use Vin\ShopwareSdk\Http\RequestFactoryInterface;
use Vin\ShopwareSdk\Http\ResponseParserInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Http\Struct\MediaType;

#[CoversClass(HttpClient::class)]
#[CoversClass(ApiResponse::class)]
#[CoversClass(MediaType::class)]
final class HttpClientTest extends TestCase
{
    public static function deleteAndGetProvider(): \Generator
    {
        $apiEndpoint = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $context = new Context($apiEndpoint, $accessToken);

        $path = '/api/product';
        $contentTypeHeader = MediaType::APPLICATION_JSON;
        $acceptHeader = MediaType::APPLICATION_JSON_API;

        $data = [
            'id' => '1',
            'name' => 'Product 1',
            'price' => 100,
        ];

        yield 'DELETE' => ['DELETE', $path, $contentTypeHeader, $acceptHeader, $context, 204, $data];

        yield 'GET' => ['GET', $path, $contentTypeHeader, $acceptHeader, $context, 200, $data];
    }

    public static function patchAndPostProvider(): \Generator
    {
        $apiEndpoint = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $context = new Context($apiEndpoint, $accessToken);

        $path = '/api/product';
        $contentTypeHeader = MediaType::APPLICATION_JSON;
        $acceptHeader = MediaType::APPLICATION_JSON_API;

        $requestData = [
            'id' => '1',
            'name' => 'Product 1',
            'price' => 150,
        ];

        yield 'PATCH' => ['PATCH', $path, $contentTypeHeader, $acceptHeader, $context, $requestData, $requestData];

        yield 'POST' => ['POST', $path, $contentTypeHeader, $acceptHeader, $context, $requestData, $requestData];
    }

    public static function postGenericDataProvider(): \Generator
    {
        $apiEndpoint = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $context = new Context($apiEndpoint, $accessToken);

        $path = '/api/product';
        $contentTypeHeader = MediaType::APPLICATION_JSON;
        $acceptHeader = MediaType::APPLICATION_JSON_API;

        $requestData = [
            'id' => '1',
            'name' => 'Product 1',
            'price' => 150,
        ];

        yield [$path, $contentTypeHeader, $acceptHeader, $context, json_encode($requestData), $requestData];
    }

    #[DataProvider('deleteAndGetProvider')]
    public function testDeleteAndGet(string $method, string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context, int $statusCode, array $data): void
    {
        $request = $this->createMock(RequestInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->addCreateRequestMethodAndAssertionsToRequest($requestFactory, $method, $path, $contentTypeHeader, $acceptHeader, $context, $request);

        $response = $this->createMock(ResponseInterface::class);
        $this->addGetHeadersMethodToResponse($response, []);
        $this->addGetStatusCodeMethodToResponse($response, $statusCode);
        $responseParser = $this->createMock(ResponseParserInterface::class);
        $this->addGetDecodedResponseContentToResponseParser($responseParser, $response, $data);

        $psrHttpClient = $this->createMock(ClientInterface::class);
        $this->addSendRequestMethodAndAssertionsToPsrHttpClient($psrHttpClient, $request, $response);

        $httpClient = new HttpClient($requestFactory, $responseParser, $psrHttpClient);

        $serviceMethodName = strtolower($method);
        $returnedResponse = $httpClient->$serviceMethodName($path, $contentTypeHeader, $acceptHeader, $context);
        $this->assertInstanceOf(ApiResponse::class, $returnedResponse);
        $this->assertEquals($data, $returnedResponse->getContents());
        $this->assertEquals([], $returnedResponse->getHeaders());
        $this->assertEquals($statusCode, $returnedResponse->getStatusCode());
    }

    #[DataProvider('deleteAndGetProvider')]
    public function testDeleteAndGetWithClientException(string $method, string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context): void
    {
        $this->expectException(ShopwareRequestException::class);

        $request = $this->createMock(RequestInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->addCreateRequestMethodAndAssertionsToRequest($requestFactory, $method, $path, $contentTypeHeader, $acceptHeader, $context, $request);

        $responseParser = $this->createMock(ResponseParserInterface::class);

        $psrHttpClient = $this->createMock(ClientInterface::class);
        $this->addSendRequestMethodAndAssertionsThorowingClientExceptionToPsrHttpClient($psrHttpClient);

        $httpClient = new HttpClient($requestFactory, $responseParser, $psrHttpClient);

        $serviceMethodName = strtolower($method);
        $httpClient->$serviceMethodName($path, $contentTypeHeader, $acceptHeader, $context);
    }

    #[DataProvider('patchAndPostProvider')]
    public function testPatchAndPost(string $method, string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context, array $requestData, array $responseData): void
    {
        $request = $this->createMock(RequestInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->addCreateRequestWithDataMethodAndAssertionsToRequest($requestFactory, $method, $path, $contentTypeHeader, $acceptHeader, $requestData, $context, $request);

        $response = $this->createMock(ResponseInterface::class);
        $this->addGetHeadersMethodToResponse($response, []);
        $this->addGetStatusCodeMethodToResponse($response, 200);
        $responseParser = $this->createMock(ResponseParserInterface::class);
        $this->addGetDecodedResponseContentToResponseParser($responseParser, $response, $responseData);

        $psrHttpClient = $this->createMock(ClientInterface::class);
        $this->addSendRequestMethodAndAssertionsToPsrHttpClient($psrHttpClient, $request, $response);

        $httpClient = new HttpClient($requestFactory, $responseParser, $psrHttpClient);

        $serviceMethodName = strtolower($method);
        $returnedResponse = $httpClient->$serviceMethodName($path, $contentTypeHeader, $acceptHeader, $requestData, $context);
        $this->assertInstanceOf(ApiResponse::class, $returnedResponse);
        $this->assertEquals($responseData, $returnedResponse->getContents());
        $this->assertEquals([], $returnedResponse->getHeaders());
        $this->assertEquals(200, $returnedResponse->getStatusCode());
    }

    #[DataProvider('patchAndPostProvider')]
    public function testPatchAndPostWithClientException(string $method, string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context, array $requestData): void
    {
        $this->expectException(ShopwareRequestException::class);

        $request = $this->createMock(RequestInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->addCreateRequestWithDataMethodAndAssertionsToRequest($requestFactory, $method, $path, $contentTypeHeader, $acceptHeader, $requestData, $context, $request);

        $responseParser = $this->createMock(ResponseParserInterface::class);

        $psrHttpClient = $this->createMock(ClientInterface::class);
        $this->addSendRequestMethodAndAssertionsThorowingClientExceptionToPsrHttpClient($psrHttpClient);

        $httpClient = new HttpClient($requestFactory, $responseParser, $psrHttpClient);

        $serviceMethodName = strtolower($method);
        $httpClient->$serviceMethodName($path, $contentTypeHeader, $acceptHeader, $requestData, $context);
    }

    #[DataProvider('postGenericDataProvider')]
    public function testPostGenericData(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context, string $requestData, array $responseData): void
    {
        $request = $this->createMock(RequestInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->addCreateRequestWithGenericDataMethodAndAssertionsToRequest($requestFactory, 'POST', $path, $contentTypeHeader, $acceptHeader, $requestData, $context, $request);

        $response = $this->createMock(ResponseInterface::class);
        $this->addGetHeadersMethodToResponse($response, []);
        $this->addGetStatusCodeMethodToResponse($response, 200);
        $responseParser = $this->createMock(ResponseParserInterface::class);
        $this->addGetDecodedResponseContentToResponseParser($responseParser, $response, $responseData);

        $psrHttpClient = $this->createMock(ClientInterface::class);
        $this->addSendRequestMethodAndAssertionsToPsrHttpClient($psrHttpClient, $request, $response);

        $httpClient = new HttpClient($requestFactory, $responseParser, $psrHttpClient);

        $returnedResponse = $httpClient->postGenericData($path, $contentTypeHeader, $acceptHeader, $requestData, $context);
        $this->assertInstanceOf(ApiResponse::class, $returnedResponse);
        $this->assertEquals($responseData, $returnedResponse->getContents());
        $this->assertEquals([], $returnedResponse->getHeaders());
        $this->assertEquals(200, $returnedResponse->getStatusCode());
    }

    #[DataProvider('postGenericDataProvider')]
    public function testPostGenericDataWithClientException(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context, string $requestData): void
    {
        $this->expectException(ShopwareRequestException::class);

        $request = $this->createMock(RequestInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->addCreateRequestWithGenericDataMethodAndAssertionsToRequest($requestFactory, 'POST', $path, $contentTypeHeader, $acceptHeader, $requestData, $context, $request);

        $responseParser = $this->createMock(ResponseParserInterface::class);

        $psrHttpClient = $this->createMock(ClientInterface::class);
        $this->addSendRequestMethodAndAssertionsThorowingClientExceptionToPsrHttpClient($psrHttpClient);

        $httpClient = new HttpClient($requestFactory, $responseParser, $psrHttpClient);

        $httpClient->postGenericData($path, $contentTypeHeader, $acceptHeader, $requestData, $context);
    }

    private function addCreateRequestMethodAndAssertionsToRequest(
        MockObject $requestFactory,
        string $method,
        string $path,
        MediaType $contentTypeHeader,
        MediaType $acceptHeader,
        Context $context,
        RequestInterface $request
    ): void {
        $requestFactory->expects($this->once())
            ->method('createRequest')
            ->willReturnCallback(function ($passedMethod, $passedPath, $passedContentTypeHeader, $passedAcceptHeader, $passedContext) use ($method, $path, $contentTypeHeader, $acceptHeader, $context, $request) {
                $this->assertEquals($method, $passedMethod);
                $this->assertEquals($path, $passedPath);
                $this->assertEquals($contentTypeHeader, $passedContentTypeHeader);
                $this->assertEquals($acceptHeader, $passedAcceptHeader);
                $this->assertEquals($context, $passedContext);

                return $request;
            });
    }

    private function addCreateRequestWithDataMethodAndAssertionsToRequest(
        MockObject $requestFactory,
        string $method,
        string $path,
        MediaType $contentTypeHeader,
        MediaType $acceptHeader,
        array $data,
        Context $context,
        RequestInterface $request
    ): void {
        $requestFactory->expects($this->once())
            ->method('createRequestWithData')
            ->willReturnCallback(function ($passedMethod, $passedPath, $passedContentTypeHeader, $passedAcceptHeader, $passedData, $passedContext) use ($method, $path, $contentTypeHeader, $acceptHeader, $data, $context, $request) {
                $this->assertEquals($method, $passedMethod);
                $this->assertEquals($path, $passedPath);
                $this->assertEquals($contentTypeHeader, $passedContentTypeHeader);
                $this->assertEquals($acceptHeader, $passedAcceptHeader);
                $this->assertEquals($data, $passedData);
                $this->assertEquals($context, $passedContext);

                return $request;
            });
    }

    private function addCreateRequestWithGenericDataMethodAndAssertionsToRequest(
        MockObject $requestFactory,
        string $method,
        string $path,
        MediaType $contentTypeHeader,
        MediaType $acceptHeader,
        string $data,
        Context $context,
        RequestInterface $request
    ): void {
        $requestFactory->expects($this->once())
            ->method('createRequestWithGenericData')
            ->willReturnCallback(function ($passedMethod, $passedPath, $passedContentTypeHeader, $passedAcceptHeader, $passedData, $passedContext) use ($method, $path, $contentTypeHeader, $acceptHeader, $data, $context, $request) {
                $this->assertEquals($method, $passedMethod);
                $this->assertEquals($path, $passedPath);
                $this->assertEquals($contentTypeHeader, $passedContentTypeHeader);
                $this->assertEquals($acceptHeader, $passedAcceptHeader);
                $this->assertEquals($data, $passedData);
                $this->assertEquals($context, $passedContext);

                return $request;
            });
    }

    private function addSendRequestMethodAndAssertionsToPsrHttpClient(MockObject $psrHttpClient, RequestInterface $request, ResponseInterface $response): void
    {
        $psrHttpClient->expects($this->once())
            ->method('sendRequest')
            ->willReturnCallback(function ($passedRequest) use ($request, $response) {
                $this->assertEquals($request, $passedRequest);

                return $response;
            });
    }

    private function addSendRequestMethodAndAssertionsThorowingClientExceptionToPsrHttpClient(MockObject $psrHttpClient): void
    {
        $psrHttpClient->expects($this->once())
            ->method('sendRequest')
            ->willThrowException($this->createStub(ClientExceptionInterface::class));
    }

    private function addGetDecodedResponseContentToResponseParser(MockObject $responseParser, ResponseInterface $response, array $data): void
    {
        $responseParser->expects($this->once())
            ->method('getDecodedResponseContent')
            ->willReturnCallback(function ($passedResponse) use ($response, $data) {
                $this->assertEquals($response, $passedResponse);

                return $data;
            });
    }

    private function addGetHeadersMethodToResponse(MockObject $response, array $headers): void
    {
        $response->expects($this->once())
            ->method('getHeaders')
            ->willReturn($headers);
    }

    private function addGetStatusCodeMethodToResponse(MockObject $mockObject, int $statusCode): void
    {
        $mockObject->expects($this->once())
            ->method('getStatusCode')
            ->willReturn($statusCode);
    }
}
