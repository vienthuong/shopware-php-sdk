<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\Struct\AggregationResultCollection;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\SearchResultMeta;
use Vin\ShopwareSdk\Service\Struct\KeyValuePair;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

final class AdminSearchService implements AdminSearchServiceInterface
{
    private const ADMIN_SEARCH_ENDPOINT = '/api/_admin/search';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
        private readonly HydratorInterface $hydrator,
    ) {
    }

    public function search(KeyValuePairs $criteriaCollection, array $additionalHeaders = []): KeyValuePairs
    {
        $parsed = [];

        foreach ($criteriaCollection as $part) {
            $partCriteria = $part->getValue();

            if (! $partCriteria instanceof Criteria) {
                throw new \InvalidArgumentException('Parameter $criteria must be array of Criteria');
            }

            $parsed[$part->getKey()] = $partCriteria->parse();
        }
        /** @var string $data */
        $data = json_encode($parsed);

        try {
            $headers = array_merge($additionalHeaders, [
                'Content-Type' => 'application/vnd.api+json',
            ]);
            $apiResponse = $this->apiService->post(self::ADMIN_SEARCH_ENDPOINT, [], $data, $headers);

            $pairs = new KeyValuePairs();

            $responseData = $apiResponse->getContents()['data'] ?? [];

            foreach ($criteriaCollection as $entityName => $partCriteria) {
                $itemResponse = $responseData[$entityName] ?? [];

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
                    $partCriteria->getValue(),
                    $apiResponse->getContext()
                );

                $pairs->add(KeyValuePair::create($entityName, $result));
            }

            return $pairs;
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
