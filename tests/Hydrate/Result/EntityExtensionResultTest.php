<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Result;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductMedia\ProductMediaCollection;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Factory\AttributeHydratorFactory;
use Vin\ShopwareSdk\Factory\DefinitionProviderFactory;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Result\EntityExtensionResult;
use Vin\ShopwareSdk\Hydrate\Result\EntityResult;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParser;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;
use Vin\ShopwareSdkTest\Helper\PopulateEntityResultCacheTrait;

#[CoversClass(EntityExtensionResult::class)]
final class EntityExtensionResultTest extends TestCase
{
    use ParseStubTrait;
    use PopulateEntityResultCacheTrait;

    public static function fromDataProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $productId = $jsonData['data'][0]['id'];
        $data = $jsonData['included'][array_search($productId, array_column($jsonData['included'], 'id'))];

        yield [
            $data,
            $productId,
        ];
    }

    public static function hydrateExtensionProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product
        $entityResult = EntityResult::fromData($data);

        $entityResultCache = new EntityResultCache();
        self::populateEntityResultCache($entityResultCache, $jsonData['included']);

        $entityExtensionResult = new EntityExtensionResult($entityResult->id);

        $attributeHydrator = AttributeHydratorFactory::create();
        $relationshipsParser = new RelationshipsParser();
        $definitionProvider = DefinitionProviderFactory::create();

        yield [
            $entityExtensionResult,
            $entityResult->getEntity($attributeHydrator, $definitionProvider),
            $attributeHydrator,
            $relationshipsParser,
            $entityResultCache,
            $definitionProvider,
        ];
    }

    /**
     * @param array<string, mixed> $data
     */
    #[DataProvider('fromDataProvider')]
    public function testFromData(
        array $data,
        string $expectedId,
    ): void {
        /** @phpstan-ignore-next-line */
        $entityResult = EntityExtensionResult::fromData($data);
        $this->assertEquals($expectedId, $entityResult->id);
    }

    #[DataProvider('hydrateExtensionProvider')]
    public function testHydrateExtension(
        EntityExtensionResult $entityExtensionResult,
        Entity $entity,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
    ): void {
        $entityExtensionResult->hydrateExtension($entity, $attributeHydrator, $relationshipsParser, $entityResultCache, $definitionProvider);

        $this->assertTrue($entity->hasExtension('additionalMedia'));
        $this->assertInstanceOf(ProductMediaCollection::class, $entity->getExtension('additionalMedia'));
        /** @var ProductMediaCollection $additionalMedia */
        $additionalMedia = $entity->getExtension('additionalMedia');
        $this->assertEquals(1, $additionalMedia->count());
    }
}
