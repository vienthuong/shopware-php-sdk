<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Exception\ShopwareSearchResponseException;
use Vin\ShopwareSdk\Factory\HydratorFactory;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\Struct\AggregationResultCollection;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Repository\Struct\SearchResultMeta;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;
use Vin\ShopwareSdk\Service\ApiResponse;
use Vin\ShopwareSdk\Service\ApiService;
use Vin\ShopwareSdk\Service\Struct\SyncOperator;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;
use Vin\ShopwareSdk\Service\SyncService;

class EntityRepository implements RepositoryInterface
{
    use CreateClientTrait;

    private const SEARCH_API_ENDPOINT = '/api/search';

    private const MERGE_VERSION_API_ENDPOINT = '/api/_action/version/merge';

    private const VERSION_API_ENDPOINT = '/api/_action/version';

    private const SEARCH_IDS_API_ENDPOINT = '/api/search-ids';

    private HydratorInterface $hydrator;

    public function __construct(
        public string $entityName,
        private EntityDefinition $definition,
        public string $route,
        ?HydratorInterface $hydrator = null
    ) {
        $this->httpClient ??= $this->createHttpClient();
        $this->hydrator = $hydrator ?: HydratorFactory::create();
    }

    public function getDefinition(): EntityDefinition
    {
        return $this->definition;
    }

    public function get(string $id, Criteria $criteria, Context $context): ?Entity
    {
        $criteria->setIds([$id]);

        return $this->search($criteria, $context)
            ->get($id);
    }

    public function search(Criteria $criteria, Context $context): EntitySearchResult
    {
        try {
            $response = $this->httpClient->post($this->getSearchApiUrl($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($criteria->parse()),
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();

            throw new ShopwareSearchResponseException($message, $exception->getResponse()->getStatusCode(), $criteria, $exception);
        }

        $response = $this->decodeResponse($response);

        $aggregations = new AggregationResultCollection($response['aggregations']);

        $entities = $this->hydrator->hydrateSearchResult($response, $context, $this->entityName);

        $meta = new SearchResultMeta($response['meta']['total'], $response['meta']['totalCountMode']);

        return new EntitySearchResult($this->entityName, $meta, $entities, $aggregations, $criteria, $context);
    }

    public function searchIds(Criteria $criteria, Context $context): IdSearchResult
    {
        try {
            $response = $this->httpClient->post($this->getSearchIdsApiUrl($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($criteria->parse()),
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();

            throw new ShopwareSearchResponseException($message, $exception->getResponse()->getStatusCode(), $criteria, $exception);
        }

        $response = $this->decodeResponse($response);

        return new IdSearchResult($response['total'], $response['data'], $criteria, $context);
    }

    /**
     * Create an entity
     */
    public function create(array $data, Context $context): void
    {
        try {
            $this->httpClient->post($this->getEntityEndpoint($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
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

        try {
            $this->httpClient->patch($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function delete(string $id, Context $context): void
    {
        try {
            $this->httpClient->delete($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function syncDeleted(array $ids, Context $context): ApiResponse
    {
        $apiService = new ApiService($context);
        $syncService = new SyncService($apiService, $context);

        $headers = [
            'fail-on-error' => true,
        ];

        if (! \is_array($ids[array_key_first($ids)])) {
            $data = array_map(fn (string $id) => [
                'id' => $id,
            ], $ids);
        } else {
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

        try {
            $response = $this->httpClient->post($this->getCreateVersionEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ])->getBody()
                ->getContents();

            $response = $this->decodeResponse($response);

            return new VersionResponse($response);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function mergeVersion(string $versionId, Context $context): void
    {
        try {
            $this->httpClient->post($this->getMergeVersionEndpoint($context->apiEndpoint, $versionId), [
                'headers' => $this->buildHeaders($context, [
                    'sw-version-id' => $versionId,
                ]),
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function deleteVersion(string $id, string $versionId, Context $context): void
    {
        try {
            $this->httpClient->post($this->getDeleteVersionEndpoint($context->apiEndpoint, $id, $versionId), [
                'headers' => $this->buildHeaders($context),
            ])->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function clone(string $id, Context $context, ?CloneBehaviour $cloneBehaviour = null): string
    {
        $data = [];

        if ($cloneBehaviour) {
            $data = $cloneBehaviour->jsonSerialize();
        }

        try {
            $response = $this->httpClient->post($this->getCloneEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ])->getBody()
                ->getContents();

            $response = $this->decodeResponse($response);

            return $response['id'];
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function createNew(array $data): Entity
    {
        $entityClass = $this->getDefinition()
            ->getEntityClass();

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
        return sprintf('%s%s%s%s/%s', $endpoint, self::VERSION_API_ENDPOINT, $versionId, $this->route, $entityId);
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
