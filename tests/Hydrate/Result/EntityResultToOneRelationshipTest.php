<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Result;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductManufacturer\ProductManufacturerEntity;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Factory\AttributeHydratorFactory;
use Vin\ShopwareSdk\Factory\DefinitionProviderFactory;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Result\EntityResult;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToOneRelationship;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;
use Vin\ShopwareSdkTest\Helper\PopulateEntityResultCacheTrait;

#[CoversClass(EntityResultToOneRelationship::class)]
final class EntityResultToOneRelationshipTest extends TestCase
{
    use ParseStubTrait;
    use PopulateEntityResultCacheTrait;

    public static function hydrateRelationshipProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product
        $entityResult = EntityResult::fromData($data);

        $entityResultCache = new EntityResultCache();
        self::populateEntityResultCache($entityResultCache, $jsonData['included']);

        $productManufacturerId = '6f718d3335d44f56b83adf4812b33a50';
        $entityResultToOneRelationship = new EntityResultToOneRelationship('manufacturer', 'product_manufacturer', $productManufacturerId);

        $propertyGetter = static fn (Entity $entity, string $propertyName): mixed => $entity->getProperty($propertyName);
        $propertySetter = static function (Entity $entity, string $propertyName, mixed $value): void {
            $entity->setProperty($propertyName, $value);
        };

        $attributeHydrator = AttributeHydratorFactory::create();
        $definitionProvider = DefinitionProviderFactory::create();

        yield [
            $entityResultToOneRelationship,
            $entityResult->getEntity($attributeHydrator, $definitionProvider),
            $propertyGetter,
            $propertySetter,
            $attributeHydrator,
            $entityResultCache,
            $definitionProvider,
            $productManufacturerId,
        ];
    }

    #[DataProvider('hydrateRelationshipProvider')]
    public function testHydrateRelationship(
        EntityResultToOneRelationship $entityResultToOneRelationship,
        ProductEntity $entity,
        callable $propertyGetter,
        callable $propertySetter,
        AttributeHydratorInterface $attributeHydrator,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
        string $expectedProductManufacturerId,
    ): void {
        $entityResultToOneRelationship->hydrateRelationship(
            $entity,
            $propertyGetter,
            $propertySetter,
            $attributeHydrator,
            $entityResultCache,
            $definitionProvider
        );

        $this->assertInstanceOf(ProductManufacturerEntity::class, $entity->manufacturer);
        $this->assertEquals($expectedProductManufacturerId, $entity->manufacturer->id);
    }
}
