<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Context;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Context\ContextBuilder;
use Vin\ShopwareSdk\Context\ContextBuilderFactory;
use Vin\ShopwareSdk\Data\AccessToken;

final class ContextBuilderFactoryTest extends TestCase
{
    public static function constructionProvider(): \Generator
    {
        $shopUrl = 'https://shopware.local';
        $accessToken = new AccessToken('ACCESS_TOKEN');
        $accessTokenProvider = self::createStub(AccessTokenProvider::class);
        $accessTokenProvider->method('getAccessToken')
            ->willReturn($accessToken);

        yield [$shopUrl, $accessTokenProvider];
    }

    public static function createContextBuilderProvider(): \Generator
    {
        [$shopUrl, $accessTokenProvider] = iterator_to_array(self::constructionProvider())[0];
        $contextBuilderFactory = new ContextBuilderFactory($shopUrl, $accessTokenProvider);

        yield [$contextBuilderFactory];
    }

    #[DataProvider('constructionProvider')]
    public function testConstruction(string $shopwareUrl, AccessTokenProvider $accessTokenProvider): void
    {
        $contextBuilderFactory = new ContextBuilderFactory($shopwareUrl, $accessTokenProvider);
        $this->assertInstanceOf(ContextBuilderFactory::class, $contextBuilderFactory);
    }

    #[DataProvider('createContextBuilderProvider')]
    public function testCreateContextBuilder(ContextBuilderFactory $contextBuilderFactory): void
    {
        $contextBuilder = $contextBuilderFactory->createContextBuilder();
        $this->assertInstanceOf(ContextBuilder::class, $contextBuilder);
    }
}
