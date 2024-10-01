<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Result;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\ProductMedia\ProductMediaCollection;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Factory\AttributeHydratorFactory;
use Vin\ShopwareSdk\Factory\DefinitionProviderFactory;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Result\EntityResult;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToManyRelationship;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;
use Vin\ShopwareSdkTest\Helper\PopulateEntityResultCacheTrait;

#[CoversClass(EntityResultToManyRelationship::class)]
final class EntityResultToManyRelationshipTest extends TestCase
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

        $productMediaId = '586c34f20d4d4c2e8230d76964af1634';
        $entityResultToManyRelationship = new EntityResultToManyRelationship('media', 'product_media', $productMediaId);

        $propertyGetter = static fn (Entity $entity, string $propertyName): mixed => $entity->getProperty($propertyName);
        $propertySetter = static function (Entity $entity, string $propertyName, mixed $value): void {
            $entity->setProperty($propertyName, $value);
        };

        $attributeHydrator = AttributeHydratorFactory::create();
        $definitionProvider = DefinitionProviderFactory::create();

        yield [
            $entityResultToManyRelationship,
            $entityResult->getEntity($attributeHydrator, $definitionProvider),
            $propertyGetter,
            $propertySetter,
            $attributeHydrator,
            $entityResultCache,
            $definitionProvider,
            $productMediaId,
        ];
    }

    #[DataProvider('hydrateRelationshipProvider')]
    public function testHydrateRelationship(
        EntityResultToManyRelationship $entityResultToManyRelationship,
        ProductEntity $entity,
        callable $propertyGetter,
        callable $propertySetter,
        AttributeHydratorInterface $attributeHydrator,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
        string $expectedProductMediaId,
    ): void {
        $entityResultToManyRelationship->hydrateRelationship(
            $entity,
            $propertyGetter,
            $propertySetter,
            $attributeHydrator,
            $entityResultCache,
            $definitionProvider
        );

        $this->assertInstanceOf(ProductMediaCollection::class, $entity->media);
        $this->assertEquals(1, $entity->media->count());
        $this->assertEquals($expectedProductMediaId, $entity->media->first()?->id);
    }
}