<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\GrantType;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\ClientCredentialsGrantType;

#[CoversClass(GrantType::class)]
#[CoversClass(ClientCredentialsGrantType::class)]
final class ClientCredentialsGrantTypeTest extends TestCase
{
    public static function buildFormDataProvider(): \Generator
    {
        $clientId = 'KEMTEINHTNGEH';
        $clientSecret = 'MEDF5436DFBFHFHA45';
        $grantType = new ClientCredentialsGrantType($clientId, $clientSecret);

        yield [
            $grantType,
            [
                'grant_type' => GrantType::CLIENT_CREDENTIALS,
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
            ],
        ];
    }

    public static function constructionProvider(): \Generator
    {
        yield ['KEMTEINHTNGEH', 'MEDF5436DFBFHFHA45'];
    }

    #[DataProvider('buildFormDataProvider')]
    public function testBuildFormData(ClientCredentialsGrantType $grantType, array $expectedFormData): void
    {
        $this->assertEquals($expectedFormData, $grantType->buildFormData());
    }

    #[DataProvider('constructionProvider')]
    public function testConstruction(string $clientId, string $clientSecret): void
    {
        $grantType = new ClientCredentialsGrantType($clientId, $clientSecret);
        $this->assertInstanceOf(ClientCredentialsGrantType::class, $grantType);
        $this->assertEquals($clientId, $grantType->clientId);
        $this->assertEquals($clientSecret, $grantType->clientSecret);
    }
}
