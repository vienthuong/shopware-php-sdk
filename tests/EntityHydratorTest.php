<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Entity\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Factory\RepositoryFactory;
use Vin\ShopwareSdk\Hydrate\EntityHydrator;
use Vin\ShopwareSdk\Client\Client;

/**
 * @covers \Vin\ShopwareSdk\Hydrate\EntityHydrator
 */
class EntityHydratorTest extends TestCase
{
    private EntityHydrator $entityHydrator;
    private MockHandler $mock;
    private Context $context;

    protected function setUp(): void
    {
        $this->context = new Context('http://test.com', new AccessToken('mock-token'));
        $this->mock = new MockHandler();

        $handlerStack = HandlerStack::create($this->mock);

        $client = Client::create(['handler' => $handlerStack]);

        $this->entityHydrator = new EntityHydrator(false);
        $this->productRepository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);

        $this->productRepository->setHttpClient($client);
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
                ]
            ],
        ], $this->context, 'product');

        static::assertInstanceOf(ProductCollection::class, $result);
        static::assertCount(1, $result);
        static::assertInstanceOf(ProductEntity::class, $result->get($productId));
    }
}
