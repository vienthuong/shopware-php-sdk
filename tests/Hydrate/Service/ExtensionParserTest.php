<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Hydrate\Service;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Hydrate\Result\EntityExtensionResult;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParser;
use Vin\ShopwareSdkTest\Helper\ParseStubTrait;

#[CoversClass(ExtensionParser::class)]
final class ExtensionParserTest extends TestCase
{
    use ParseStubTrait;

    public static function parseExtensionsProvider(): \Generator
    {
        $jsonData = self::parseStub('product');
        $data = $jsonData['data'][0]; // the JSON contains only one product
        $relationshipDatasets = $data['relationships'];

        $extensionParser = new ExtensionParser();

        $extensionData = $data['relationships']['extensions'];
        $expectedExtensions = [new EntityExtensionResult($extensionData['data']['id'])];

        yield 'with one extension' => [
            $extensionParser,
            $relationshipDatasets,
            $expectedExtensions,
        ];

        $relationshipDatasets = array_merge($relationshipDatasets);
        unset($relationshipDatasets['extensions']['data']);

        yield 'without "data" in extension' => [
            $extensionParser,
            $relationshipDatasets,
            [],
        ];

        $relationshipDatasets = array_merge($relationshipDatasets);
        $relationshipDatasets['extensions']['data'] = null;

        yield 'with "data" = null in extension' => [
            $extensionParser,
            $relationshipDatasets,
            [],
        ];
    }

    #[DataProvider('parseExtensionsProvider')]
    public function testParseExtensions(
        ExtensionParser $extensionParser,
        array $datasets,
        array $expectedExtensions
    ): void {
        $this->assertEquals($expectedExtensions, $extensionParser->parseExtensions($datasets));
    }
}
