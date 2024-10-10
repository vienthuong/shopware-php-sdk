<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\CriteriaCollection;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\Struct\AggregationResultCollection;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResultCollection;
use Vin\ShopwareSdk\Repository\Struct\SearchResultMeta;
use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;

final class AdminSearchService implements AdminSearchServiceInterface
{
    private const ADMIN_SEARCH_ENDPOINT = '/api/_admin/search';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
        private readonly HydratorInterface $hydrator,
    ) {
    }

    public function search(CriteriaCollection $criteriaCollection, array $additionalHeaders = []): EntitySearchResultCollection
    {
        $apiResponse = $this->apiService->post(self::ADMIN_SEARCH_ENDPOINT, data: $criteriaCollection->parse(), additionalHeaders: $additionalHeaders);
        $data = $apiResponse->getContents()['data'] ?? [];

        $entitySearchResultCollection = new EntitySearchResultCollection();
        foreach ($criteriaCollection as $entityName => $criteria) {
            $itemResponse = $data[$entityName] ?? [];
            $rawData = $itemResponse['data'] ?? [];

            $rawData = array_map(fn ($item) => [
                'type' => $entityName,
                'id' => $item['id'],
                'attributes' => $item,
                'meta' => [
                    'total' => $itemResponse['total'],
                    'totalCountMode' => Criteria::TOTAL_COUNT_MODE_EXACT,
                ],
            ], $rawData);

            $itemResponse['data'] = $rawData;

            $aggregations = new AggregationResultCollection($itemResponse['aggregations'] ?? []);
            $entities = $this->hydrator->hydrateSearchResult($itemResponse, $entityName);
            $meta = new SearchResultMeta($itemResponse['total'] ?? 0, Criteria::TOTAL_COUNT_MODE_EXACT);

            $result = new EntitySearchResult(
                $entityName,
                $meta,
                $entities,
                $aggregations,
                $criteria,
                $apiResponse->getContext()
            );

            $entitySearchResultCollection->set($entityName, $result);
        }

        return $entitySearchResultCollection;
    }
}
