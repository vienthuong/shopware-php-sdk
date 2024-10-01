<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Entity\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Factory\HydratorFactory;
use Vin\ShopwareSdk\Hydrate\EntityHydrator;

#[CoversClass(EntityHydrator::class)]
class EntityHydratorTest extends TestCase
{
    private EntityHydrator $entityHydrator;

    private Context $context;

    protected function setUp(): void
    {
        $this->context = new Context('http://test.com', new AccessToken('mock-token'));

        $this->entityHydrator = HydratorFactory::create();
    }

    public function testHydrateSearchResultWithEmptyResult(): void
    {
        $result = $this->entityHydrator->hydrateSearchResult([], $this->context);

        static::assertInstanceOf(EntityCollection::class, $result);

        $result = $this->entityHydrator->hydrateSearchResult([], $this->context, 'product');

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
        ], $this->context, 'product');

        static::assertInstanceOf(ProductCollection::class, $result);
        static::assertCount(1, $result);
        static::assertInstanceOf(ProductEntity::class, $result->get($productId));
    }
}
