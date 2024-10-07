<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Client\CreateClientTrait;
use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Exception\ShopwareSearchResponseException;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\Struct\AggregationResultCollection;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Repository\Struct\SearchResultMeta;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;
use Vin\ShopwareSdk\Service\Struct\SyncOperator;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;
use Vin\ShopwareSdk\Service\SyncServiceInterface;

class EntityRepository implements RepositoryInterface
{
    use CreateClientTrait;

    private const SEARCH_API_ENDPOINT = '/api/search';

    private const MERGE_VERSION_API_ENDPOINT = '/api/_action/version/merge';

    private const VERSION_API_ENDPOINT = '/api/_action/version';

    private const SEARCH_IDS_API_ENDPOINT = '/api/search-ids';

    public function __construct(
        public string $entityName,
        private EntityDefinition $definition,
        public string $route,
        private readonly ContextBuilderFactoryInterface $contextBuilderFactory,
        private readonly SyncServiceInterface $syncService,
        private readonly HydratorInterface $hydrator
    ) {
        $this->httpClient ??= $this->createHttpClient();
    }

    public function getDefinition(): EntityDefinition
    {
        return $this->definition;
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareSearchResponseException
     */
    public function get(string $id, Criteria $criteria): ?Entity
    {
        $criteria->setIds([$id]);

        return $this->search($criteria)
            ->get($id);
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareSearchResponseException
     */
    public function search(Criteria $criteria): EntitySearchResult
    {
        $data = $criteria->parse();
        /** @var string $data */
        $data = json_encode($data);

        $context = $this->buildContext();

        try {
            $response = $this->httpClient->post($this->getSearchApiUrl($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => $data,
            ]);
            $responseContent = $response->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();

            throw new ShopwareSearchResponseException($message, $exception->getResponse()->getStatusCode(), $criteria, $exception);
        }

        $decodedContent = $this->decodeResponse($responseContent);

        $aggregations = new AggregationResultCollection($decodedContent['aggregations']);

        $entities = $this->hydrator->hydrateSearchResult($decodedContent, $this->entityName);

        $meta = new SearchResultMeta($decodedContent['meta']['total'], $decodedContent['meta']['totalCountMode']);

        return new EntitySearchResult($this->entityName, $meta, $entities, $aggregations, $criteria, $context);
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareSearchResponseException
     */
    public function searchIds(Criteria $criteria): IdSearchResult
    {
        $data = $criteria->parse();
        /** @var string $data */
        $data = json_encode($data);

        $context = $this->buildContext();

        try {
            $response = $this->httpClient->post($this->getSearchIdsApiUrl($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => $data,
            ]);
            $responseContent = $response->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();

            throw new ShopwareSearchResponseException($message, $exception->getResponse()->getStatusCode(), $criteria, $exception);
        }

        $decodedContent = $this->decodeResponse($responseContent);

        return new IdSearchResult($decodedContent['total'], $decodedContent['data'], $criteria, $context);
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function create(array $data): void
    {
        $context = $this->buildContext();

        try {
            $response = $this->httpClient->post($this->getEntityEndpoint($context->apiEndpoint), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ]);
            $response->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function update(array $data): void
    {
        if (empty($data['id'])) {
            throw new \InvalidArgumentException('Id is not provided for update payload');
        }
        $id = $data['id'];

        $context = $this->buildContext();

        try {
            $response = $this->httpClient->patch($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ]);
            $response->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function delete(string $id): void
    {
        $context = $this->buildContext();

        try {
            $response = $this->httpClient->delete($this->getEntityEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
            ]);
            $response->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function syncDeleted(array $ids): ApiResponse
    {
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

        return $this->syncService->sync($payload, [], $headers);
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function createVersion(string $id, ?string $versionId = null, ?string $versionName = null): VersionResponse
    {
        $data = [];

        if ($versionId) {
            $data['versionId'] = $versionId;
        }

        if ($versionName) {
            $data['versionName'] = $versionName;
        }

        $context = $this->buildContext();

        try {
            $response = $this->httpClient->post($this->getCreateVersionEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ]);
            $responseContent = $response->getBody()
                ->getContents();
            $decodedContent = $this->decodeResponse($responseContent);

            return new VersionResponse($decodedContent);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function mergeVersion(string $versionId): void
    {
        $context = $this->buildContext([
            'sw-version-id' => $versionId,
        ]);

        try {
            $response = $this->httpClient->post($this->getMergeVersionEndpoint($context->apiEndpoint, $versionId), [
                'headers' => $this->buildHeaders($context),
            ]);
            $response->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function deleteVersion(string $id, string $versionId): void
    {
        $context = $this->buildContext();

        try {
            $response = $this->httpClient->post($this->getDeleteVersionEndpoint($context->apiEndpoint, $id, $versionId), [
                'headers' => $this->buildHeaders($context),
            ]);
            $response->getBody()
                ->getContents();
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function clone(string $id, ?CloneBehaviour $cloneBehaviour = null): string
    {
        $data = [];

        if ($cloneBehaviour) {
            $data = $cloneBehaviour->jsonSerialize();
        }

        $context = $this->buildContext();

        try {
            $response = $this->httpClient->post($this->getCloneEndpoint($context->apiEndpoint, $id), [
                'headers' => $this->buildHeaders($context),
                'body' => json_encode($data),
            ]);
            $responseContent = $response->getBody()
                ->getContents();
            $decodedContent = $this->decodeResponse($responseContent);

            return $decodedContent['id'];
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

    /**
     * @param array<string, string|int|float|bool|null> $additionalHeaders
     * @throws AuthorizationFailedException
     */
    private function buildContext(array $additionalHeaders = []): Context
    {
        $contextBuilder = $this->contextBuilderFactory->createContextBuilder();
        $contextBuilder->withAdditionalHeaders($additionalHeaders);

        return $contextBuilder->build();
    }

    private function decodeResponse(string $response): array
    {
        return \json_decode($response, true) ?? [];
    }
}
