<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Result;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\ProductMedia\ProductMediaCollection;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Result\EntityResult;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToManyRelationship;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdkTest\Helper\HydrationServicesFactoryTrait;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;
use Vin\ShopwareSdkTest\Helper\PopulateEntityResultCacheTrait;

#[CoversClass(EntityResultToManyRelationship::class)]
final class EntityResultToManyRelationshipTest extends TestCase
{
    use ParseStubTrait;
    use PopulateEntityResultCacheTrait;
    use HydrationServicesFactoryTrait;

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

        [
            AttributeHydratorInterface::class => $attributeHydrator,
            DefinitionProviderInterface::class => $definitionProvider,
        ] = self::createServicesForHydration('0.0.0.0');

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
