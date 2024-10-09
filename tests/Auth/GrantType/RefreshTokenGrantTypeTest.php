<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\GrantType;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\RefreshTokenGrantType;

#[CoversClass(GrantType::class)]
#[CoversClass(RefreshTokenGrantType::class)]
final class RefreshTokenGrantTypeTest extends TestCase
{
    public static function buildFormDataProvider(): \Generator
    {
        $refreshToken = 'MEDF5436DFBFHFHA45';
        $grantType = new RefreshTokenGrantType($refreshToken);

        yield [
            $grantType,
            [
                'grant_type' => GrantType::REFRESH_TOKEN,
                'client_id' => 'administration',
                'refresh_token' => $refreshToken,
            ],
        ];
    }

    public static function constructionProvider(): \Generator
    {
        yield ['MEDF5436DFBFHFHA45'];
    }

    #[DataProvider('buildFormDataProvider')]
    public function testBuildFormData(RefreshTokenGrantType $grantType, array $expectedFormData): void
    {
        $this->assertEquals($expectedFormData, $grantType->buildFormData());
    }

    #[DataProvider('constructionProvider')]
    public function testConstruction(string $refreshToken): void
    {
        $grantType = new RefreshTokenGrantType($refreshToken);
        $this->assertInstanceOf(RefreshTokenGrantType::class, $grantType);
        $this->assertEquals($refreshToken, $grantType->refreshToken);
    }
}
