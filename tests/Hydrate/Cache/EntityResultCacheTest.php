<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Cache;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Result\EntityResult;

#[CoversClass(EntityResultCache::class)]
final class EntityResultCacheTest extends TestCase
{
    public static function allProvider(): \Generator
    {
        $entityResultCache = new EntityResultCache();
        $entityResult1 = new EntityResult('afa97095fe6a466186828f512e6321b6', [], [], 'product');
        $entityResultCache->set($entityResult1->entityName, $entityResult1->id, $entityResult1);

        yield [$entityResultCache, [$entityResult1]];
    }

    public static function getProvider(): \Generator
    {
        $entityResultCache = new EntityResultCache();
        $entityResult1 = new EntityResult('afa97095fe6a466186828f512e6321b6', [], [], 'product');
        $entityResultCache->set($entityResult1->entityName, $entityResult1->id, $entityResult1);

        yield [
            $entityResultCache,
            $entityResult1->entityName,
            $entityResult1->id,
            $entityResult1,
        ];
    }

    public static function getNotFoundProvider(): \Generator
    {
        yield [
            new EntityResultCache(),
            'product',
            'afa97095fe6a466186828f512e6321b6',
        ];
    }

    public static function setProvider(): \Generator
    {
        $entityResultCache = new EntityResultCache();
        $entityResult1 = new EntityResult('afa97095fe6a466186828f512e6321b6', [], [], 'product');

        yield [
            $entityResultCache,
            $entityResult1,
        ];
    }

    /**
     * @param EntityResult[] $expectedEntityResults
     */
    #[DataProvider('allProvider')]
    public function testAll(
        EntityResultCache $entityResultCache,
        array $expectedEntityResults
    ): void {
        $this->assertEquals($expectedEntityResults, $entityResultCache->all());
    }

    #[DataProvider('getProvider')]
    public function testGet(
        EntityResultCache $entityResultCache,
        string $type,
        string $id,
        EntityResult $expectedEntityResult
    ): void {
        $this->assertEquals($expectedEntityResult, $entityResultCache->get($type, $id));
    }

    #[DataProvider('getNotFoundProvider')]
    public function testGetNotFound(
        EntityResultCache $entityResultCache,
        string $type,
        string $id,
    ): void {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(sprintf('Entity result of type %s with id %s not found in cache', $type, $id));

        $entityResultCache->get($type, $id);
    }

    #[DataProvider('setProvider')]
    public function testSet(
        EntityResultCache $entityResultCache,
        EntityResult $entityResult,
    ): void {
        $entityResultCache->set($entityResult->entityName, $entityResult->id, $entityResult);
        $this->assertEquals($entityResult, $entityResultCache->get($entityResult->entityName, $entityResult->id));
    }
}
