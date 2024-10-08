<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Auth\GrantType;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Auth\GrantType;
use Vin\ShopwareSdk\Auth\GrantType\PasswordGrantType;

#[CoversClass(GrantType::class)]
#[CoversClass(PasswordGrantType::class)]
final class PasswordGrantTypeTest extends TestCase
{
    public static function buildFormDataProvider(): \Generator
    {
        $username = 'admin';
        $password = 'shopware';
        $grantType = new PasswordGrantType($username, $password);

        yield [
            $grantType,
            [
                'grant_type' => GrantType::PASSWORD,
                'client_id' => 'administration',
                'username' => $username,
                'password' => $password,
                'scopes' => 'write',
            ],
        ];
    }

    public static function constructionProvider(): \Generator
    {
        yield ['admin', 'shopware'];
    }

    #[DataProvider('buildFormDataProvider')]
    public function testBuildFormData(PasswordGrantType $grantType, array $expectedFormData): void
    {
        $this->assertEquals($expectedFormData, $grantType->buildFormData());
    }

    #[DataProvider('constructionProvider')]
    public function testConstruction(string $username, string $password): void
    {
        $grantType = new PasswordGrantType($username, $password);
        $this->assertInstanceOf(PasswordGrantType::class, $grantType);
        $this->assertEquals('administration', $grantType->clientId);
        $this->assertEquals($username, $grantType->username);
        $this->assertEquals($password, $grantType->password);
    }
}
