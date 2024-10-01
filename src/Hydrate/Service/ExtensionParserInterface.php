<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Service;

use Vin\ShopwareSdk\Hydrate\Result\EntityExtensionResult;

/**
 * @phpstan-import-type ToOneRelationshipData from RelationshipsParserInterface
 * @phpstan-import-type ToManyRelationshipData from RelationshipsParserInterface
 */
interface ExtensionParserInterface
{
    /**
     * @param array<string, ToOneRelationshipData|ToManyRelationshipData> $datasets
     * @return EntityExtensionResult[]
     */
    public function parseExtensions(array $datasets): array;
}
