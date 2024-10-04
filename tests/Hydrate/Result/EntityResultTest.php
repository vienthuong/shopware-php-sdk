<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Result;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductManufacturer\ProductManufacturerEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductMedia\ProductMediaCollection;
use Vin\ShopwareSdk\Factory\AttributeHydratorFactory;
use Vin\ShopwareSdk\Factory\DefinitionProviderFactory;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Result\EntityResult;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParser;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParser;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;
use Vin\ShopwareSdkTest\Helper\PopulateEntityResultCacheTrait;

#[CoversClass(EntityResult::class)]
final class EntityResultTest extends TestCase
{
    use ParseStubTrait;
    use PopulateEntityResultCacheTrait;

    public static function fromDataProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product

        yield [
            $data,
            $data['id'],
            $data['attributes'],
            $data['relationships'],
            'product',
        ];
    }

    public static function getEntityProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product
        $entityResult = EntityResult::fromData($data);

        $attributeHydrator = AttributeHydratorFactory::create();
        $definitionProvider = DefinitionProviderFactory::create();

        yield [
            $entityResult,
            $attributeHydrator,
            $definitionProvider,
            $data['id'],
            $data['attributes']['productNumber'],
        ];
    }

    public static function hydrateExtensionsProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product
        $entityResult = EntityResult::fromData($data);

        $attributeHydrator = AttributeHydratorFactory::create();
        $relationshipsParser = new RelationshipsParser();
        $extensionParser = new ExtensionParser();
        $definitionProvider = DefinitionProviderFactory::create();

        $entityResultCache = new EntityResultCache();
        self::populateEntityResultCache($entityResultCache, $jsonData['included']);

        yield [
            $entityResult,
            $attributeHydrator,
            $relationshipsParser,
            $extensionParser,
            $entityResultCache,
            $definitionProvider,
        ];
    }

    public static function hydrateRelationshipsProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product
        $entityResult = EntityResult::fromData($data);

        $attributeHydrator = AttributeHydratorFactory::create();
        $relationshipsParser = new RelationshipsParser();
        $definitionProvider = DefinitionProviderFactory::create();

        $entityResultCache = new EntityResultCache();
        self::populateEntityResultCache($entityResultCache, $jsonData['included']);

        $productManufacturer = $jsonData['included'][array_search($data['attributes']['manufacturerId'], array_column($jsonData['included'], 'id'))] ?? null;

        yield [
            $entityResult,
            $attributeHydrator,
            $relationshipsParser,
            $entityResultCache,
            $definitionProvider,
            $productManufacturer['attributes']['name'],
        ];
    }

    /**
     * @param array<string, mixed> $data
     * @param array<string, mixed> $expectedAttributes
     * @param array<string, mixed> $expectedRelationships
     */
    #[DataProvider('fromDataProvider')]
    public function testFromData(
        array $data,
        string $expectedId,
        array $expectedAttributes,
        array $expectedRelationships,
        string $expectedEntityName
    ): void {
        /** @phpstan-ignore-next-line */
        $entityResult = EntityResult::fromData($data);
        $this->assertEquals($expectedId, $entityResult->id);
        $this->assertEquals($expectedAttributes, $entityResult->attributes);
        $this->assertEquals($expectedRelationships, $entityResult->relationships);
        $this->assertEquals($expectedEntityName, $entityResult->entityName);
    }

    #[DataProvider('getEntityProvider')]
    public function testGetEntity(
        EntityResult $entityResult,
        AttributeHydratorInterface $attributeHydrator,
        DefinitionProviderInterface $definitionProvider,
        string $expectedId,
        string $expectedProductNumber
    ): void {
        /** @var ProductEntity $entity */
        $entity = $entityResult->getEntity($attributeHydrator, $definitionProvider);

        $this->assertInstanceOf(Entity::class, $entity);
        $this->assertEquals($expectedId, $entity->id);
        $this->assertEquals($expectedProductNumber, $entity->productNumber);
        $this->assertNull($entity->manufacturer);
    }

    #[DataProvider('hydrateExtensionsProvider')]
    public function testHydrateExtensions(
        EntityResult $entityResult,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        ExtensionParserInterface $extensionParser,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
    ): void {
        /** @var ProductEntity $entity */
        $entity = $entityResult->getEntity($attributeHydrator, $definitionProvider);

        $entityResult->hydrateExtensions(
            $entity,
            $attributeHydrator,
            $relationshipsParser,
            $extensionParser,
            $entityResultCache,
            $definitionProvider
        );

        $this->assertTrue($entity->hasExtension('additionalMedia'));
        $this->assertInstanceOf(ProductMediaCollection::class, $entity->getExtension('additionalMedia'));
        /** @var ProductMediaCollection $additionalMedia */
        $additionalMedia = $entity->getExtension('additionalMedia');
        $this->assertEquals(1, $additionalMedia->count());
    }

    #[DataProvider('hydrateRelationshipsProvider')]
    public function testHydrateRelationships(
        EntityResult $entityResult,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
        ?string $expectedManufacturerName,
    ): void {
        /** @var ProductEntity $entity */
        $entity = $entityResult->getEntity($attributeHydrator, $definitionProvider);

        $entityResult->hydrateRelationships(
            $entity,
            $attributeHydrator,
            $relationshipsParser,
            $entityResultCache,
            $definitionProvider
        );

        $this->assertInstanceOf(ProductManufacturerEntity::class, $entity->manufacturer);
        $this->assertEquals($expectedManufacturerName, $entity->manufacturer->name);
    }
}
