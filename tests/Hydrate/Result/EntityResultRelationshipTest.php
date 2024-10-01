<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Result;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultRelationship;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToManyRelationship;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToOneRelationship;

#[CoversClass(EntityResultRelationship::class)]
final class EntityResultRelationshipTest extends TestCase
{
    public static function fromDataAndPropertyNameProvider(): \Generator
    {
        $data = [
            'type' => 'product_media',
            'id' => '8662ebedd5f4467cb26be923ba277f34',
            'attributes' => [],
        ];

        yield 'EntityResultToOneRelationship' => [
            EntityResultToOneRelationship::class,
            $data,
            'cover',
            $data['type'],
            $data['id'],
        ];

        yield 'EntityResultToManyRelationship' => [
            EntityResultToManyRelationship::class,
            $data,
            'cover',
            $data['type'],
            $data['id'],
        ];
    }

    /**
     * @param class-string<EntityResultRelationship> $entityResultRelationshipClassName
     * @param array{type: string, id: string} $data
     */
    #[DataProvider('fromDataAndPropertyNameProvider')]
    public function testFromDataAndPropertyName(
        string $entityResultRelationshipClassName,
        array $data,
        string $propertyName,
        string $expectedRelatedEntityName,
        string $expectedRelatedEntityId
    ): void {
        $entityResultRelationship = $entityResultRelationshipClassName::fromDataAndPropertyName($data, $propertyName);
        $this->assertInstanceOf($entityResultRelationshipClassName, $entityResultRelationship);
        $this->assertEquals($propertyName, $entityResultRelationship->propertyNameInEntity);
        $this->assertEquals($expectedRelatedEntityName, $entityResultRelationship->relatedEntityName);
        $this->assertEquals($expectedRelatedEntityId, $entityResultRelationship->relatedEntityId);
    }
}
