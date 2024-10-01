<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Service;

use Vin\ShopwareSdk\Hydrate\Result\EntityResultRelationship;

/**
 * @phpstan-type ToOneRelationshipData array{data?: array{type: string, id: string}|null}
 * @phpstan-type ToManyRelationshipData array{data?: array{type: string, id: string}[]|null}
 */
interface RelationshipsParserInterface
{
    /**
     * @param array<string, ToOneRelationshipData|ToManyRelationshipData> $datasets
     * @return EntityResultRelationship[]
     */
    public function parseRelationships(array $datasets): array;
}
