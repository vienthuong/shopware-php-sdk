<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Factory\HydratorFactory;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\Struct\AggregationResultCollection;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Repository\Struct\SearchResultMeta;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;
use Vin\ShopwareSdk\Service\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\SyncOperator;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;
use Vin\ShopwareSdk\Service\SyncService;

class EntityRepository implements RepositoryInterface
{
    use CreateClientTrait;

    private const SEARCH_API_ENDPOINT = '/api/search';

    private const AGGREGATE_API_ENDPOINT = '/api/aggregate';

    private const MERGE_VERSION_API_ENDPOINT = '/api/_action/version/merge';

    private const VERSION_API_ENDPOINT = '/api/_action/version';

    private const SEARCH_IDS_API_ENDPOINT = '/api/search-ids';

    public string $entityName;

    public string $route;

    private HydratorInterface $hydrator;

    private EntityDefinition $definition;

    public function __construct(string $entityName, EntityDefinition $definition, string $route, ?HydratorInterface $hydrator = null)
    {
        $this->entityName = $entityName;
        $this->httpClient = $this->httpClient ?? $this->createHttpClient();
        $this->hydrator = $hydrator ?: HydratorFactory::create();
        $this->definition = $definition;
        $this->route = $route;
    }

    public function getDefinition(): EntityDefinition
    {
        return $this->definition;
    }

    public function get(string $id, Criteria $criteria, Context $context): ?Entity
    {
        $criteria->setIds([$id]);

        return $this->search($criteria, $context)->get($id);
    }

    public function search(Criteria $criteria, Context $context): EntitySearchResult
    {
        $response = $this->httpClient->post($this->getSearchApiUrl($context->apiEndpoint), [
            'headers' => $this->buildHeaders($context),
            'body' => json_encode($criteria->parse())
        ])->getBody()->getContents();

        $response = $this->decodeResponse($response);

        $aggregations = new AggregationResultCollection($response['aggregations']);

        $entities = $this->hydrator->hydrateSearchResult($response, $context, $this->entityName);

        $meta = new SearchResultMeta($response['meta']['total'], $response['meta']['totalCountMode']);

        return new EntitySearchResult($this->entityName, $meta, $entities, $aggregations, $criteria, $context);
    }

    public function aggregate(Criteria $criteria, Context $context): AggregationResultCollection
    {
        $response = $this->httpClient->post($this->getAggregateApiUrl($context->apiEndpoint), [
            'headers' => $this->buildHeaders($context),
            'body' => json_encode($criteria->parse())
        ])->getBody()->getContents();

        $response = $this->decodeResponse($response);

        return new AggregationResultCollection($response['aggregations']);
    }

    public function searchIds(Criteria $criteria, Context $context): IdSearchResult
    {
        $response = $this->httpClient->post($this->getSearchIdsApiUrl($context->apiEndpoint), [
            'headers' => $this->buildHeaders($context),
            'body' => json_encode($criteria->parse())
        ])->getBody()->getContents();

        $response = $this->decodeResponse($response);

        return new IdSearchResult($response['total'], $response['data'], $criteria, $context);
    }

    /**
     * Create an entity
     */
    public function create(array $data, Context $context): void
    {
        $this->httpClient->post($this->getEntityEndpoint($context->apiEndpoint), [
            'headers' => $this->buildHeaders($context),
            'body' => json_encode($data)
        ])->getBody()->getContents();
    }

    /**
     * Update an entity
     */
    public function update(array $data, Context $context): void
    {
        if (empty($data['id'])) {
            throw new \InvalidArgumentException('Id is not provided for update payload');
        }

        $id = $data['id'];

        $this->httpClient->patch($this->getEntityEndpoint($context->apiEndpoint, $id), [
            'headers' => $this->buildHeaders($context),
            'body' => json_encode($data)
        ]);
    }

    public function delete(string $id, Context $context): void
    {
        $this->httpClient->delete($this->getEntityEndpoint($context->apiEndpoint, $id), [
            'headers' => $this->buildHeaders($context),
        ])->getBody()->getContents();
    }

    public function syncDeleted(array $ids, Context $context): ApiResponse
    {
        $syncService = new SyncService($context);
        $syncService->setHttpClient($this->httpClient);

        $headers = ['fail-on-error' => true];

        if (!\is_array($ids[array_key_first($ids)]))
        {
            $data = array_map(function (string $id) {
                return ['id' => $id];
            }, $ids);
        } else
        {
            $data = $ids;
        }

        $payload = new SyncPayload();
        $operator = new SyncOperator($this->entityName, SyncOperator::DELETE_OPERATOR, $data);
        $payload->set($this->entityName, $operator);

        return $syncService->sync($payload, [], $headers);
    }

    public function createVersion(string $id, Context $context, ?string $versionId = null, ?string $versionName = null): VersionResponse
    {
        $data = [];

        if ($versionId) {
            $data['versionId'] = $versionId;
        }

        if ($versionName) {
            $data['versionName'] = $versionName;
        }

        $response = $this->httpClient->post($this->getCreateVersionEndpoint($context->apiEndpoint, $id), [
            'headers' => $this->buildHeaders($context),
            'body' => json_encode($data)
        ])->getBody()->getContents();

        $response = $this->decodeResponse($response);

        return new VersionResponse($response);
    }

    public function mergeVersion(string $versionId, Context $context): void
    {
        $this->httpClient->post($this->getMergeVersionEndpoint($context->apiEndpoint, $versionId), [
            'headers' => $this->buildHeaders($context, [
                'sw-version-id' => $versionId
            ]),
        ]);
    }

    public function deleteVersion(string $id, string $versionId, Context $context): void
    {
        $this->httpClient->post($this->getDeleteVersionEndpoint($context->apiEndpoint, $id, $versionId), [
            'headers' => $this->buildHeaders($context),
        ]);
    }

    public function clone(string $id, Context $context, ?CloneBehaviour $cloneBehaviour = null): string
    {
        $data = [];

        if ($cloneBehaviour) {
            $data = $cloneBehaviour->jsonSerialize();
        }

        $response = $this->httpClient->post($this->getCloneEndpoint($context->apiEndpoint, $id), [
            'headers' => $this->buildHeaders($context),
            'body' => json_encode($data)
        ])->getBody()->getContents();

        $response = $this->decodeResponse($response);

        return $response['id'];
    }

    public function createNew(array $data): Entity
    {
        $entityClass = $this->getDefinition()->getEntityClass();

        /** @var Entity $entity */
        $entity = new $entityClass($data);

        $entity->id = Uuid::randomHex();
        $entity->_uniqueIdentifier = $entity->id;
        $entity->internalSetEntityName($this->getDefinition()->getEntityName());

        return $entity;
    }

    protected function getEntityEndpoint(string $endpoint, ?string $entityId = null): string
    {
        return sprintf('%s/api%s/%s', $endpoint, $this->route, $entityId ?? '');
    }

    protected function getSearchApiUrl(string $endpoint, ?string $path = null): string
    {
        return sprintf('%s%s%s%s', $endpoint, self::SEARCH_API_ENDPOINT, $this->route, $path ?? '');
    }

    protected function getAggregateApiUrl(string $endpoint, ?string $path = null): string
    {
        return sprintf('%s%s%s%s', $endpoint, self::AGGREGATE_API_ENDPOINT, $this->route, $path ?? '');
    }

    protected function getCloneEndpoint(string $endpoint, string $entityId): string
    {
        return sprintf('%s/api/_action/clone%s/%s', $endpoint, $this->route, $entityId);
    }

    protected function getMergeVersionEndpoint(string $endpoint, string $versionId): string
    {
        return sprintf('%s%s%s/%s', $endpoint, self::MERGE_VERSION_API_ENDPOINT, $this->route, $versionId);
    }

    protected function getCreateVersionEndpoint(string $endpoint, string $entityId): string
    {
        return sprintf('%s%s%s/%s', $endpoint, self::VERSION_API_ENDPOINT, $this->route, $entityId);
    }

    protected function getDeleteVersionEndpoint(string $endpoint, string $entityId, string $versionId): string
    {
        return sprintf('%s%s/%s%s/%s', $endpoint, self::VERSION_API_ENDPOINT, $versionId, $this->route, $entityId);
    }

    protected function getSearchIdsApiUrl(string $endpoint, ?string $path = null): string
    {
        return sprintf('%s%s%s%s', $endpoint, self::SEARCH_IDS_API_ENDPOINT, $this->route, $path ?? '');
    }

    protected function buildHeaders(Context $context, array $additionalHeaders = []): array
    {
        $accessToken = $context->accessToken;

        $headers = array_merge([
            'Accept' => 'application/vnd.api+json',
            'Content-Type' => 'application/json',
            'Authorization' => $accessToken->tokenType . ' ' . $accessToken->accessToken,
            'sw-language-id' => $context->languageId,
            'sw-currency-id' => $context->currencyId,
            'sw-version-id' => $context->versionId,
            'sw-inheritance' => $context->inheritance,
            'sw-api-compatibility' => $context->compatibility,
        ], $additionalHeaders, $context->additionalHeaders);

        return array_filter($headers);
    }

    private function decodeResponse(string $response): array
    {
        return \json_decode($response, true) ?? [];
    }
}
