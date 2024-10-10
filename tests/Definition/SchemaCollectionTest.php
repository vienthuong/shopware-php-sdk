<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Definition;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Definition\SchemaCollection;

final class SchemaCollectionTest extends TestCase
{
    public static function schemaProvider(): \Generator
    {
        $schemaStub1 = self::createStub(Schema::class);
        $schemaStub2 = self::createStub(Schema::class);

        yield 'entity1' => ['entity1', $schemaStub1];
        yield 'entity2' => ['entity2', $schemaStub2];
    }

    #[DataProvider('schemaProvider')]
    public function testSetAndGet(string $entityName, Schema $schema): void
    {
        $collection = new SchemaCollection();
        $collection->set($entityName, $schema);

        $this->assertSame($schema, $collection->get($entityName));
    }

    public function testGetUnknownEntityName(): void
    {
        $collection = new SchemaCollection();
        $this->assertNull($collection->get('unknown_entity'));
    }
}
