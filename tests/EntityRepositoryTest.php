<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\AccessToken;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Factory\RepositoryFactory;
use Vin\ShopwareSdk\Repository\EntityRepository;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Client\Client;

/**
 * @covers \Vin\ShopwareSdk\Repository\EntityRepository
 */
class EntityRepositoryTest extends TestCase
{
    private EntityRepository $productRepository;

    private MockHandler $mock;

    private Context $context;

    protected function setUp(): void
    {
        $this->context = new Context('http://test.com', new AccessToken('mock-token'));
        $this->mock = new MockHandler();

        $handlerStack = HandlerStack::create($this->mock);

        $client = Client::create([
            'handler' => $handlerStack,
        ]);

        /** @var EntityRepository $productRepository */
        $productRepository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);
        $this->productRepository = $productRepository;

        $this->productRepository->setHttpClient($client);
    }

    public function testSearchBadResponse(): void
    {
        static::expectException(ShopwareResponseException::class);
        static::expectExceptionMessage('Unauthenticated');
        static::expectExceptionCode(401);

        $this->mock->append(new BadResponseException('Unauthenticated', new Request('POST', 'test'), new Response(401, [], 'Unauthenticated')));

        $this->productRepository->get('product-id', new Criteria(), $this->context);
    }

    public function testGet(): void
    {
        $productId = '6bfa486a2c4c4e0db32c6a252baf6b3a';
        /** @phpstan-ignore argument.type */
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/' . $productId . '.json')));

        /** @var ProductEntity $product */
        $product = $this->productRepository->get($productId, new Criteria(), $this->context);

        static::assertEquals(ProductDefinition::ENTITY_NAME, $product->getEntityName());
        static::assertInstanceOf(ProductEntity::class, $product);
        static::assertEquals('Gorgeous Timo Thiago Perfomancer', $product->name);
        static::assertEquals($productId, $product->id);
        static::assertEquals('Gorgeous Timo Thiago Perfomancer', $product->getTranslated()['name']);
    }

    public function testSearch(): void
    {
        /** @phpstan-ignore argument.type */
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/products.json')));

        $result = $this->productRepository->search(new Criteria(), $this->context);

        static::assertInstanceOf(EntitySearchResult::class, $result);
        static::assertInstanceOf(ProductCollection::class, $result->getEntities());
        static::assertInstanceOf(ProductEntity::class, $result->first());
        static::assertInstanceOf(ProductEntity::class, $result->last());
        static::assertEquals(25, $result->count());
        static::assertCount(25, $result->getEntities());
        static::assertEquals(65, $result->getMeta()->getTotal());
        static::assertEquals(Criteria::TOTAL_COUNT_MODE_EXACT, $result->getMeta()->getTotalCountMode());
        static::assertInstanceOf(ProductEntity::class, $result->get('4aa38f2ec4554d01a3e109f52923dbeb'));
        static::assertNull($result->get(Uuid::randomHex()));
        static::assertEquals('4aa38f2ec4554d01a3e109f52923dbeb', $result->first()->id);
        static::assertEquals('NEW PRODUCT', $result->first()->name);
        static::assertEquals('53280fa43009419ca3b0f2d9193dcdd0', $result->last()->id);
        static::assertEquals('Gorgeous Plastic FaceField', $result->last()->name);
    }

    public function testSearchIds(): void
    {
        /** @phpstan-ignore argument.type */
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/product-ids.json')));

        $result = $this->productRepository->searchIds(new Criteria(), $this->context);

        static::assertInstanceOf(IdSearchResult::class, $result);
        static::assertEquals('fb170089052445f19ef4420a648d0d49', $result->firstId());
        static::assertCount(25, $result->getData());
        static::assertEquals(69, $result->getTotal());
    }

    public function testSearchShouldThrowShopwareHttpException(): void
    {
        static::expectException(ShopwareResponseException::class);
        static::expectExceptionMessage('Unauthenticated');
        static::expectExceptionCode(401);

        $this->mock->append(new BadResponseException('Unauthenticated', new Request('POST', 'test'), new Response(401, [], 'Unauthenticated')));

        $this->productRepository->searchIds(new Criteria(), $this->context);
    }

    public function testCreateNew(): void
    {
        /** @phpstan-ignore argument.type */
        $this->mock->append(new Response(200, [], file_get_contents(__DIR__ . '/stubs/product-ids.json')));

        $result = $this->productRepository->createNew([
            'id' => Uuid::randomHex(),
            'name' => 'New Product',
        ]);

        static::assertInstanceOf(ProductEntity::class, $result);
    }
}
