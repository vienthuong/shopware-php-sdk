<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Result;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Hydrate\Result\SearchResult;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdkTest\Helper\HydrationServicesFactoryTrait;

#[CoversClass(SearchResult::class)]
final class SearchResultTest extends TestCase
{
    use HydrationServicesFactoryTrait;

    public static function getEntitiesProvider(): \Generator
    {
        $jsonPath = __DIR__ . '/../../stubs/products.json';
        /** @phpstan-ignore-next-line */
        $jsonData = json_decode(file_get_contents($jsonPath), true);
        $searchResult = new SearchResult($jsonData['data'], $jsonData['included']);

        [
            AttributeHydratorInterface::class => $attributeHydrator,
            RelationshipsParserInterface::class => $relationshipsParser,
            ExtensionParserInterface::class => $extensionParser,
            DefinitionProviderInterface::class => $definitionProvider,
        ] = self::createServicesForHydration('0.0.0.0');

        yield [
            $searchResult,
            $attributeHydrator,
            $relationshipsParser,
            $extensionParser,
            $definitionProvider,
            count($jsonData['data']),
            array_column($jsonData['data'], 'id'),
        ];
    }

    public static function getEntitiesOneByOneProvider(): \Generator
    {
        $jsonPath = __DIR__ . '/../../stubs/products.json';
        /** @phpstan-ignore-next-line */
        $jsonData = json_decode(file_get_contents($jsonPath), true);

        [
            AttributeHydratorInterface::class => $attributeHydrator,
            RelationshipsParserInterface::class => $relationshipsParser,
            ExtensionParserInterface::class => $extensionParser,
            DefinitionProviderInterface::class => $definitionProvider,
        ] = self::createServicesForHydration('0.0.0.0');

        foreach ($jsonData['data'] as $data) {
            $productManufacturerId = $data['relationships']['manufacturer']['data']['id'] ?? null;
            $productManufacturer = null;
            if (is_string($productManufacturerId)) {
                $productManufacturer = $jsonData['included'][array_search($productManufacturerId, array_column($jsonData['included'], 'id'))] ?? null;
            }

            $taxId = $data['relationships']['tax']['data']['id'] ?? null;
            $tax = null;
            if (is_string($taxId)) {
                $tax = $jsonData['included'][array_search($taxId, array_column($jsonData['included'], 'id'))] ?? null;
            }

            yield 'product ' . $data['id'] => [
                new SearchResult([$data], $jsonData['included']),
                $attributeHydrator,
                $relationshipsParser,
                $extensionParser,
                $definitionProvider,
                $data['id'],
                $data['attributes']['productNumber'],
                $productManufacturerId,
                $productManufacturer['attributes']['name'] ?? null,
                $taxId,
                $tax['attributes']['name'] ?? null,
            ];
        }
    }

    #[DataProvider('getEntitiesProvider')]
    public function testGetEntities(
        SearchResult $searchResult,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        ExtensionParserInterface $extensionParser,
        DefinitionProviderInterface $definitionProvider,
        int $expectedEntityCount,
        array $expectedIds
    ): void {
        $entities = $searchResult->getEntities(
            $attributeHydrator,
            $relationshipsParser,
            $extensionParser,
            $definitionProvider
        );

        $this->assertCount($expectedEntityCount, $entities);
        foreach ($entities as $entity) {
            $this->assertInstanceOf(Entity::class, $entity);
        }

        foreach ($expectedIds as $expectedId) {
            $this->assertArrayHasKey($expectedId, $entities);
            $entity = $entities[$expectedId];
            $this->assertEquals($expectedId, $entity->id);
        }
    }

    #[DataProvider('getEntitiesOneByOneProvider')]
    public function testGetEntitiesOneByOne(
        SearchResult $searchResult,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        ExtensionParserInterface $extensionParser,
        DefinitionProviderInterface $definitionProvider,
        string $expectedId,
        string $expectedProductNumber,
        ?string $expectedManufacturerId,
        ?string $expectedManufacturerName,
        ?string $expectedTaxId,
        ?string $expectedTaxName,
    ): void {
        $entities = $searchResult->getEntities(
            $attributeHydrator,
            $relationshipsParser,
            $extensionParser,
            $definitionProvider
        );
        $this->assertCount(1, $entities);
        /** @var ProductEntity $entity */
        $entity = array_pop($entities);

        $this->assertInstanceOf(Entity::class, $entity);
        $this->assertEquals($expectedId, $entity->id);
        $this->assertEquals($expectedProductNumber, $entity->productNumber);

        $this->assertEquals($expectedManufacturerId, $entity->manufacturerId);
        $this->assertEquals($expectedManufacturerName, $entity->manufacturer?->name);

        $this->assertEquals($expectedTaxId, $entity->taxId);
        $this->assertEquals($expectedTaxName, $entity->tax?->name);
    }
}
