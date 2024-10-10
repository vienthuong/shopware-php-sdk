<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Context;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Context\ContextBuilder;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Defaults;

#[CoversClass(ContextBuilder::class)]
final class ContextBuilderTest extends TestCase
{
    public static function buildProvider(): \Generator
    {
        $shopUrl = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $accessTokenProvider = self::createStub(AccessTokenProvider::class);
        $accessTokenProvider->method('getAccessToken')
            ->willReturn($accessToken);

        $contextBuilder = new ContextBuilder($shopUrl, $accessTokenProvider);
        yield 'Default' => [
            $contextBuilder,
            null,
            null,
            null,
            false,
            $accessToken,
            Defaults::LANGUAGE_SYSTEM,
            Defaults::CURRENCY,
            Defaults::LIVE_VERSION,
            true,
            true,
            [],
        ];

        $otherLanguageId = '1005d51aed40461c883019471c486960';
        $contextBuilder = new ContextBuilder($shopUrl, $accessTokenProvider);
        yield 'With Language Id' => [
            $contextBuilder,
            $otherLanguageId,
            null,
            null,
            false,
            $accessToken,
            $otherLanguageId,
            Defaults::CURRENCY,
            Defaults::LIVE_VERSION,
            true,
            true,
            [],
        ];

        $otherVersionId = '5b31f42c6a4646a1984e9dfe42e412b9';
        $contextBuilder = new ContextBuilder($shopUrl, $accessTokenProvider);
        yield 'With Version Id' => [
            $contextBuilder,
            null,
            $otherVersionId,
            null,
            false,
            $accessToken,
            Defaults::LANGUAGE_SYSTEM,
            Defaults::CURRENCY,
            $otherVersionId,
            true,
            true,
            [],
        ];

        $otherAdditionalHeaders = [
            'X-Test-Header' => 'Test',
            'X-Test-Header-2' => 'Test 2',
        ];
        $contextBuilder = new ContextBuilder($shopUrl, $accessTokenProvider);
        yield 'With Additional Headers added in one batch' => [
            $contextBuilder,
            null,
            null,
            $otherAdditionalHeaders,
            false,
            $accessToken,
            Defaults::LANGUAGE_SYSTEM,
            Defaults::CURRENCY,
            Defaults::LIVE_VERSION,
            true,
            true,
            $otherAdditionalHeaders,
        ];
        yield 'With Additional Headers added one by one' => [
            $contextBuilder,
            null,
            null,
            $otherAdditionalHeaders,
            true,
            $accessToken,
            Defaults::LANGUAGE_SYSTEM,
            Defaults::CURRENCY,
            Defaults::LIVE_VERSION,
            true,
            true,
            $otherAdditionalHeaders,
        ];
    }

    public static function constructionProvider(): \Generator
    {
        $shopUrl = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $accessTokenProvider = self::createStub(AccessTokenProvider::class);
        $accessTokenProvider->method('getAccessToken')
            ->willReturn($accessToken);

        yield [
            $shopUrl,
            $accessTokenProvider,
        ];
    }

    #[DataProvider('buildProvider')]
    public function testBuild(
        ContextBuilder $contextBuilder,
        ?string $languageId,
        ?string $versionId,
        ?array $additionalHeaders,
        bool $addAdditionalHeadersOneByOne,
        AccessToken $expectedToken,
        string $expectedLanguageId,
        string $expectedCurrencyId,
        string $expectedVersionId,
        bool $expectedCompatibility,
        bool $expectedInheritance,
        array $expectedAdditionalHeaders
    ): void {
        if (is_string($languageId)) {
            $contextBuilder = $contextBuilder->withLanguageId($languageId);
        }

        if (is_string($versionId)) {
            $contextBuilder = $contextBuilder->withVersionId($versionId);
        }

        if (is_array($additionalHeaders) && $addAdditionalHeadersOneByOne === true) {
            foreach ($additionalHeaders as $header => $value) {
                $contextBuilder = $contextBuilder->withAdditionalHeader($header, $value);
            }
        }

        if (is_array($additionalHeaders) && $addAdditionalHeadersOneByOne === false) {
            $contextBuilder = $contextBuilder->withAdditionalHeaders($additionalHeaders);
        }

        $contextBuilder = $contextBuilder->build();
        $this->assertInstanceOf(Context::class, $contextBuilder);
        $this->assertEquals($expectedToken, $contextBuilder->accessToken);
        $this->assertEquals($expectedLanguageId, $contextBuilder->languageId);
        $this->assertEquals($expectedCurrencyId, $contextBuilder->currencyId);
        $this->assertEquals($expectedVersionId, $contextBuilder->versionId);
        $this->assertEquals($expectedCompatibility, $contextBuilder->compatibility);
        $this->assertEquals($expectedInheritance, $contextBuilder->inheritance);
        $this->assertEquals($expectedAdditionalHeaders, $contextBuilder->additionalHeaders);
    }

    #[DataProvider('constructionProvider')]
    public function testConstruction(string $shopUrl, AccessTokenProvider $accessTokenProvider): void
    {
        $contextBuilder = new ContextBuilder($shopUrl, $accessTokenProvider);
        $this->assertInstanceOf(ContextBuilder::class, $contextBuilder);
    }
}
