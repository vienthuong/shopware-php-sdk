<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Service;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToManyRelationship;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToOneRelationship;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParser;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;

#[CoversClass(RelationshipsParser::class)]
final class RelationshipParserTest extends TestCase
{
    use ParseStubTrait;

    public static function parseRelationshipsProvider(): \Generator
    {
        $data = self::parseStub('media');
        $relationshipDatasets = $data['relationships'];

        $relationshipParser = new RelationshipsParser();

        yield 'with to-one and to-many relationships' => [
            $relationshipParser,
            $relationshipDatasets,
            [
                new EntityResultToManyRelationship('thumbnails', 'media_thumbnail', '313966b87ed0499b8fe3965b069e752a'),
                new EntityResultToManyRelationship('thumbnails', 'media_thumbnail', '66d39cacfe2f4d73bfefc686b3ce3354'),
                new EntityResultToManyRelationship('thumbnails', 'media_thumbnail', 'f663d0c9bcaa4a3fac9262be175de68e'),
                new EntityResultToOneRelationship('mediaFolder', 'media_folder', 'c0b567d426c540578df59c3a37a5b421'),
            ],
        ];

        $relationshipDatasets = array_merge($relationshipDatasets);
        foreach ($relationshipDatasets as $key => $relationshipDataset) {
            unset($relationshipDatasets[$key]['data']);
        }

        yield 'without "data" in all relationships' => [
            $relationshipParser,
            $relationshipDatasets,
            [],
        ];

        $relationshipDatasets = array_merge($relationshipDatasets);
        foreach ($relationshipDatasets as $key => $relationshipDataset) {
            $relationshipDatasets[$key]['data'] = null;
        }

        yield 'with "data" = null in all relationships' => [
            $relationshipParser,
            $relationshipDatasets,
            [],
        ];
    }

    #[DataProvider('parseRelationshipsProvider')]
    public function testParseRelationships(
        RelationshipsParser $relationshipsParser,
        array $datasets,
        array $expectedRelationships
    ): void {
        $this->assertEquals($expectedRelationships, $relationshipsParser->parseRelationships($datasets));
    }
}
