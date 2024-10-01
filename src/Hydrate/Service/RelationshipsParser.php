<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Service;

use Vin\ShopwareSdk\Hydrate\Result\EntityResultToManyRelationship;
use Vin\ShopwareSdk\Hydrate\Result\EntityResultToOneRelationship;

final class RelationshipsParser implements RelationshipsParserInterface
{
    public function parseRelationships(array $datasets): array
    {
        $relationships = [];
        foreach ($datasets as $relationshipName => $relationship) {
            // Extensions are handled in the extensions parser
            if ($relationshipName === 'extensions') {
                continue;
            }

            if (array_key_exists('data', $relationship) === false) {
                continue;
            }
            if (is_array($relationship['data']) === false) {
                continue;
            }

            // to-one relationship
            if (array_is_list($relationship['data']) === false) {
                /** @var array{type: string, id: string} $data */
                $data = $relationship['data'];
                $relationships[] = EntityResultToOneRelationship::fromDataAndPropertyName($data, $relationshipName);

                continue;
            }

            // to-many relationship
            /** @var array{type: string, id: string} $relationshipDataset */
            foreach ($relationship['data'] as $relationshipDataset) {
                $relationships[] = EntityResultToManyRelationship::fromDataAndPropertyName($relationshipDataset, $relationshipName);
            }
        }

        return $relationships;
    }
}
