<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk;

use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Service\InfoService;

class InfoControllerTest extends TestCase
{
    public function testGetSchema(): void
    {
        $entityMapping = file_get_contents(__DIR__ . '/../src/Resources/entity-mapping.json');

        $entityMapping = json_decode($entityMapping, true);

        $accessToken = new AccessToken('fakeAccessToken');
        $context = new Context('http://test.com', $accessToken);

        $infoService = new InfoService($context);
        foreach ($entityMapping as $entity => $definition) {
            $schema = $infoService->getSchema($entity);

            static::assertInstanceOf(Schema::class, $schema);
            static::assertEquals($entity, $schema->entity);
        }
    }
}
