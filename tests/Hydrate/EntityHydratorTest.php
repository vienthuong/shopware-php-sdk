<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\EntityHydrator;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;
use Vin\ShopwareSdkTest\Helper\HydrationServicesFactoryTrait;

#[CoversClass(EntityHydrator::class)]
class EntityHydratorTest extends TestCase
{
    use HydrationServicesFactoryTrait;

    private EntityHydrator $entityHydrator;

    protected function setUp(): void
    {
        [
            AttributeHydratorInterface::class => $attributeHydrator,
            RelationshipsParserInterface::class => $relationshipsParser,
            ExtensionParserInterface::class => $extensionParser,
            DefinitionProviderInterface::class => $definitionProvider,
        ] = self::createServicesForHydration('0.0.0.0');

        $this->entityHydrator = new EntityHydrator($definitionProvider, $attributeHydrator, $relationshipsParser, $extensionParser);
    }

    public function testHydrateSearchResultWithEmptyResult(): void
    {
        $result = $this->entityHydrator->hydrateSearchResult([]);

        static::assertInstanceOf(EntityCollection::class, $result);

        $result = $this->entityHydrator->hydrateSearchResult([], 'product');

        static::assertInstanceOf(ProductCollection::class, $result);
    }

    public function testHydrateSearchResultWithResult(): void
    {
        $productId = Uuid::randomHex();
        $result = $this->entityHydrator->hydrateSearchResult([
            'data' => [
                [
                    'attributes' => [
                        'name' => 'Test Product',
                    ],
                    'type' => 'product',
                    'id' => $productId,
                ],
            ],
        ], 'product');

        static::assertInstanceOf(ProductCollection::class, $result);
        static::assertCount(1, $result);
        static::assertInstanceOf(ProductEntity::class, $result->get($productId));
    }
}
