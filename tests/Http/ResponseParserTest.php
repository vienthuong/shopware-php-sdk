<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Http;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\ResponseParser;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Http\Struct\MediaType;

#[CoversClass(ResponseParser::class)]
#[CoversClass(ApiResponse::class)]
#[CoversClass(MediaType::class)]
final class ResponseParserTest extends TestCase
{
    public static function checkResponseStatusCodeWithServerErrorProvider(): \Generator
    {
        $responseParser = new ResponseParser();
        $response = self::createStub(ResponseInterface::class);

        $response->method('getStatusCode')
            ->willReturn(500);
        $responseMessage = 'Internal Server Error';
        $responseBody = self::createStub(StreamInterface::class);
        $responseBody->method('getContents')
            ->willReturn($responseMessage);
        $response->method('getBody')
            ->willReturn($responseBody);

        $response->method('getReasonPhrase')
            ->willReturn($responseMessage);

        yield [$responseParser, $response, 'Internal Server Error', 500];
    }

    public static function getDecodedResponseContentProvider(): \Generator
    {
        $responseParser = new ResponseParser();
        $response = self::createStub(ResponseInterface::class);

        $response->method('getStatusCode')
            ->willReturn(200);
        $responseData = [
            'data' => 'test',
        ];
        $responseBody = self::createStub(StreamInterface::class);
        $responseBody->method('getContents')
            ->willReturn(json_encode($responseData));
        $response->method('getBody')
            ->willReturn($responseBody);

        yield [$responseParser, $response, $responseData];
    }

    public static function getDecodedResponseContentWithJsonDecodeExceptionProvider(): \Generator
    {
        $responseParser = new ResponseParser();
        $response = self::createStub(ResponseInterface::class);

        $response->method('getStatusCode')
            ->willReturn(200);
        $responseBody = self::createStub(StreamInterface::class);
        $responseBody->method('getContents')
            ->willReturn('{"data": "test"');
        $response->method('getBody')
            ->willReturn($responseBody);

        $expectedExceptionMessage = sprintf('Failed to decode JSON response: %s', '{"data": "test"');

        yield [$responseParser, $response, $expectedExceptionMessage];
    }

    public static function getDecodedResponseContentWithBlankResponseContent(): \Generator
    {
        $responseParser = new ResponseParser();
        $response = self::createStub(ResponseInterface::class);

        $response->method('getStatusCode')
            ->willReturn(200);
        $responseBody = self::createStub(StreamInterface::class);
        $responseBody->method('getContents')
            ->willReturn('');
        $response->method('getBody')
            ->willReturn($responseBody);

        yield [$responseParser, $response];
    }

    #[DataProvider('checkResponseStatusCodeWithServerErrorProvider')]
    public function testCheckResponseStatusCodeWithServerError(ResponseParser $responseParser, ResponseInterface $response, string $expectedExceptionMessage, int $expectedExceptionCode): void
    {
        $this->expectException(ShopwareResponseException::class);
        $this->expectExceptionMessage($expectedExceptionMessage);
        $this->expectExceptionCode($expectedExceptionCode);
        $responseParser->checkResponseStatusCode($response);
    }

    #[DataProvider('getDecodedResponseContentProvider')]
    public function testGetDecodedResponseContent(ResponseParser $responseParser, ResponseInterface $response, array $expectedResponseData): void
    {
        $decodedContent = $responseParser->getDecodedResponseContent($response);
        $this->assertEquals($expectedResponseData, $decodedContent);
    }

    #[DataProvider('getDecodedResponseContentWithJsonDecodeExceptionProvider')]
    public function testGetDecodedResponseContentWithJsonDecodeException(ResponseParser $responseParser, ResponseInterface $response, string $expectedExceptionMessage): void
    {
        $this->expectException(ShopwareResponseException::class);
        $this->expectExceptionMessage($expectedExceptionMessage);
        $responseParser->getDecodedResponseContent($response);
    }

    #[DataProvider('getDecodedResponseContentWithBlankResponseContent')]
    public function testGetDecodedResponseContentWithBlankResponseContent(ResponseParser $responseParser, ResponseInterface $response): void
    {
        $decodedContent = $responseParser->getDecodedResponseContent($response);
        $this->assertEquals([], $decodedContent);
    }
}
