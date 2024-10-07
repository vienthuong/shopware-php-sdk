<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Context\ContextBuilderFactory;
use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Service\ApiService;
use Vin\ShopwareSdk\Service\InfoService;

/**
 * @covers \Vin\ShopwareSdk\Service\InfoService
 */
class InfoServiceTest extends TestCase
{
    private const SHOP_URL = 'http://test.com';

    private InfoService $infoService;

    protected function setUp(): void
    {
        $accessTokenProvider = new MockAccessTokenProvider();
        $contextBuilderFactory = new ContextBuilderFactory(self::SHOP_URL, $accessTokenProvider);
        $apiService = new ApiService($contextBuilderFactory);
        $this->infoService = new InfoService($apiService);
    }

    public function testGetSchema(): void
    {
        $entityMapping = file_get_contents(__DIR__ . '/../src/Resources/entity_mapping_0.0.0.0.json');

        /** @phpstan-ignore argument.type */
        $entityMapping = json_decode($entityMapping, true);

        foreach ($entityMapping as $entity => $definition) {
            $schema = $this->infoService->getSchema($entity);

            static::assertInstanceOf(Schema::class, $schema);
            static::assertEquals($entity, $schema->entity);
        }
    }
}
