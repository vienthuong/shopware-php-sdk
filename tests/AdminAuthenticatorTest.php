<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Client\AdminAuthenticator;
use Vin\ShopwareSdk\Client\GrantType\GrantType;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;

class AdminAuthenticatorTest extends TestCase
{
    private AdminAuthenticator $authenticator;
    private MockHandler $mock;

    protected function setUp(): void
    {
        $grantType = GrantType::createFromConfig([
            'grant_type' => GrantType::PASSWORD,
            'username' => 'admin',
            'password' => 'shopware'
        ]);

        $this->authenticator = new AdminAuthenticator($grantType, 'http://test.com');

        $this->mock = new MockHandler();

        $handlerStack = HandlerStack::create($this->mock);

        $this->authenticator->setHttpClient(new Client(['handler' => $handlerStack]));
    }

    public function testFetchAccessTokenSuccess(): void
    {
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJhZG1pbmlzdHJhdGlvbiIsImp0aSI6IjU0ZjVhZjY3ZTk4ZDIyYThkY2EyZDM2MGNiNjcxZmVhYjJkZDFjNGM2NjM3YWY4ZWNiMTM3N2NkNGFhOTAzZGU3YzNmY2I4ZDE1ZmE2MjhkIiwiaWF0IjoiMTYyNDM5Nzc5Ni41NTE0NzUiLCJuYmYiOiIxNjI0Mzk3Nzk2LjU1MTQ4MSIsImV4cCI6IjE2MjQzOTgzOTYuNTQ4OTY2Iiwic3ViIjoiYjQxNTMyNzI2YjU2NDhmOWIwMGMxMGRiMzk1ZGJkYjQiLCJzY29wZXMiOlsid3JpdGUiLCJhZG1pbiJdfQ.P406Ux5Pe2C2M3qsmPsmMjtOXyDPi3_0JG3VQc9L5ZsXfoPTlPueFzaXzm2DYNX9tJPjOSlN281pWBCqFMgxnApkfPCbNc39I8SmrK-KCFsY8nOr7a2jhPtDfOQBTdA7qbtIagM9ub3QSW97QT0rNzPdFtBm8l4Ogg3uHjb-wWZcYT452F4IpsqZrFIvBm4RMyhY2MihLMM_Nn0dcxdbrVNlKV1hagZu0bb78sZhKTIKIj6wmIi-twLjTTcya6zrepsotfcUKeR7VGRbCMk2Nr92_7SEyPJIPo2FAKwDfEEdGYhfTlHoGtVf0EuCESCNx4hOQG4jzIGA4XUIfjF61A';

        $this->mock->append(new Response(200, ['X-Foo' => 'Bar'], json_encode([
            'expires_in' => 600,
            'token_type' => 'Bearer',
            'access_token' => $token
        ])));

        $response = $this->authenticator->fetchAccessToken();

        static::assertInstanceOf(AccessToken::class, $response);
        static::assertEquals($token, $response->accessToken);
    }

    public function testFetchAccessTokenFailed(): void
    {
        static::expectException(AuthorizationFailedException::class);
        $this->mock->append(new BadResponseException('Unauthenticated', new Request('POST', 'test'), new Response(401, [], '')));

        $this->authenticator->fetchAccessToken();
    }

    public function testCallTokenCallback(): void
    {
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJhZG1pbmlzdHJhdGlvbiIsImp0aSI6IjU0ZjVhZjY3ZTk4ZDIyYThkY2EyZDM2MGNiNjcxZmVhYjJkZDFjNGM2NjM3YWY4ZWNiMTM3N2NkNGFhOTAzZGU3YzNmY2I4ZDE1ZmE2MjhkIiwiaWF0IjoiMTYyNDM5Nzc5Ni41NTE0NzUiLCJuYmYiOiIxNjI0Mzk3Nzk2LjU1MTQ4MSIsImV4cCI6IjE2MjQzOTgzOTYuNTQ4OTY2Iiwic3ViIjoiYjQxNTMyNzI2YjU2NDhmOWIwMGMxMGRiMzk1ZGJkYjQiLCJzY29wZXMiOlsid3JpdGUiLCJhZG1pbiJdfQ.P406Ux5Pe2C2M3qsmPsmMjtOXyDPi3_0JG3VQc9L5ZsXfoPTlPueFzaXzm2DYNX9tJPjOSlN281pWBCqFMgxnApkfPCbNc39I8SmrK-KCFsY8nOr7a2jhPtDfOQBTdA7qbtIagM9ub3QSW97QT0rNzPdFtBm8l4Ogg3uHjb-wWZcYT452F4IpsqZrFIvBm4RMyhY2MihLMM_Nn0dcxdbrVNlKV1hagZu0bb78sZhKTIKIj6wmIi-twLjTTcya6zrepsotfcUKeR7VGRbCMk2Nr92_7SEyPJIPo2FAKwDfEEdGYhfTlHoGtVf0EuCESCNx4hOQG4jzIGA4XUIfjF61A';

        $this->mock->append(new Response(200, ['X-Foo' => 'Bar'], json_encode([
            'expires_in' => 600,
            'token_type' => 'Bearer',
            'access_token' => $token
        ])));

        $accessToken = null;

        $this->authenticator->setTokenCallback(function (AccessToken $response) use (&$accessToken) {
            $accessToken = $response;
        });

        $this->authenticator->fetchAccessToken();

        static::assertNotNull($token);
        static::assertInstanceOf(AccessToken::class, $accessToken);
        static::assertEquals($token, $accessToken->accessToken);
    }

    public function testTokenExpired(): void
    {
        $token = 'abc.' . base64_encode(json_encode(['exp' => (time() - 1000)/1000])) . '.xyz';

        $accessToken = new AccessToken($token);

        static::assertTrue($accessToken->isExpired());

        $token = 'abc.' . base64_encode(json_encode(['exp' => (time() + 1000)/1000])) . '.xyz';

        $accessToken = new AccessToken($token);

        static::assertFalse($accessToken->isExpired());
    }
}
