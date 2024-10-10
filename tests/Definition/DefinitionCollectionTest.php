<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Definition;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Definition\DefinitionCollection;

final class DefinitionCollectionTest extends TestCase
{
    public static function definitionProvider(): \Generator
    {
        $definitionMock1 = self::createStub(EntityDefinition::class);
        $definitionMock1->method('getEntityName')
            ->willReturn('entity1');

        $definitionMock2 = self::createStub(EntityDefinition::class);
        $definitionMock2->method('getEntityName')
            ->willReturn('entity2');

        yield 'entity1' => [$definitionMock1];
        yield 'entity2' => [$definitionMock2];
    }

    #[DataProvider('definitionProvider')]
    public function testSet(EntityDefinition $definition): void
    {
        $collection = new DefinitionCollection();
        $collection->set($definition);

        $this->assertSame($definition, $collection->get($definition->getEntityName()));
    }

    #[DataProvider('definitionProvider')]
    public function testGet(EntityDefinition $definition): void
    {
        $collection = new DefinitionCollection();
        $collection->set($definition);

        $this->assertSame($definition, $collection->get($definition->getEntityName()));
    }

    public function testGetUnknownEntityName(): void
    {
        $collection = new DefinitionCollection();
        $this->assertNull($collection->get('unknown_entity'));
    }
}
