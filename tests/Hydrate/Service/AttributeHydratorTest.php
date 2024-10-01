<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Service;

use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Factory\SchemaProviderFactory;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydrator;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;

#[CoversClass(AttributeHydrator::class)]
final class AttributeHydratorTest extends TestCase
{
    use ParseStubTrait;
    use ArraySubsetAsserts;

    public static function hydrateAttributesProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product

        $schemaProvider = SchemaProviderFactory::create();
        $attributeHydrator = new AttributeHydrator($schemaProvider);
        $entity = new ProductEntity();
        $entity->internalSetEntityName(ProductDefinition::ENTITY_NAME);

        yield [$attributeHydrator, $entity, ProductDefinition::ENTITY_NAME, $data['attributes']];
    }

    #[DataProvider('hydrateAttributesProvider')]
    public function testHydrateAttributes(
        AttributeHydrator $attributeHydrator,
        Entity $entity,
        string $entityName,
        array $attributes
    ): void {
        $attributeHydrator->hydrateAttributes($entity, $entityName, $attributes);
        $this->assertArraySubset($attributes, $entity->jsonSerialize());
    }
}