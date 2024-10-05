<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Service\ApiService;
use Vin\ShopwareSdk\Service\InfoService;

/**
 * @covers \Vin\ShopwareSdk\Service\InfoService
 */
class InfoServiceTest extends TestCase
{
    public function testGetSchema(): void
    {
        $entityMapping = file_get_contents(__DIR__ . '/../src/Resources/entity_mapping_0.0.0.0.json');

        /** @phpstan-ignore argument.type */
        $entityMapping = json_decode($entityMapping, true);

        $accessToken = new AccessToken('fakeAccessToken');
        $context = new Context('http://test.com', $accessToken);

        $apiService = new ApiService($context);
        $infoService = new InfoService($apiService, $context);
        foreach ($entityMapping as $entity => $definition) {
            $schema = $infoService->getSchema($entity);

            static::assertInstanceOf(Schema::class, $schema);
            static::assertEquals($entity, $schema->entity);
        }
    }
}
