<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\HttpClientInterface;
use Vin\ShopwareSdk\Http\Struct\MediaType;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\Struct\AggregationResultCollection;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Repository\Struct\SearchResultMeta;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;

final class EntityRepository implements RepositoryInterface
{
    public function __construct(
        private readonly EntityDefinition $definition,
        private readonly ContextBuilderFactoryInterface $contextBuilderFactory,
        private readonly HttpClientInterface $httpClient,
        private readonly HydratorInterface $hydrator,
    ) {
    }

    public function clone(string $id, ?CloneBehaviour $cloneBehaviour = null): string
    {
        $data = [];
        if ($cloneBehaviour) {
            $data = $cloneBehaviour->jsonSerialize();
        }

        $context = $this->buildContext();
        $response = $this->httpClient->post(
            $this->getCloneEndpoint($id),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $data,
            $context
        );

        return $response->getContents()['id'];
    }

    public function create(array $data): void
    {
        $context = $this->buildContext();
        $this->httpClient->post(
            $this->getEntityEndpoint(),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $data,
            $context
        );
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

    public function createVersion(string $id, ?string $versionId = null, ?string $versionName = null): VersionResponse
    {
        $data = [];
        if (is_string($versionId)) {
            $data['versionId'] = $versionId;
        }
        if (is_string($versionName)) {
            $data['versionName'] = $versionName;
        }

        $context = $this->buildContext();
        $response = $this->httpClient->post(
            $this->getCreateVersionEndpoint($id),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $data,
            $context
        );

        return new VersionResponse($response->getContents());
    }

    public function delete(string $id): void
    {
        $context = $this->buildContext();
        $this->httpClient->delete(
            $this->getEntityEndpoint($id),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $context
        );
    }

    public function deleteVersion(string $id, string $versionId): void
    {
        $context = $this->buildContext();
        $this->httpClient->post(
            $this->getDeleteVersionEndpoint($id, $versionId),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            [],
            $context
        );
    }

    public function get(string $id, Criteria $criteria): ?Entity
    {
        $criteria->setIds([$id]);

        return $this->search($criteria)
            ->get($id);
    }

    public function getDefinition(): EntityDefinition
    {
        return $this->definition;
    }

    public function mergeVersion(string $versionId): void
    {
        $context = $this->buildContext([
            'sw-version-id' => $versionId,
        ]);
        $this->httpClient->post(
            $this->getMergeVersionEndpoint($versionId),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            [],
            $context
        );
    }

    public function search(Criteria $criteria): EntitySearchResult
    {
        $context = $this->buildContext();
        $response = $this->httpClient->post(
            $this->getSearchApiUrl(),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $criteria->parse(),
            $context
        );

        $aggregations = new AggregationResultCollection($response->getContents()['aggregations']);
        $entities = $this->hydrator->hydrateSearchResult($response->getContents(), $this->definition->getEntityName());
        $meta = new SearchResultMeta($response->getContents()['meta']['total'], $response->getContents()['meta']['totalCountMode']);

        return new EntitySearchResult($this->definition->getEntityName(), $meta, $entities, $aggregations, $criteria, $context);
    }

    public function searchIds(Criteria $criteria): IdSearchResult
    {
        $context = $this->buildContext();
        $response = $this->httpClient->post(
            $this->getSearchIdsApiUrl(),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $criteria->parse(),
            $context
        );

        return new IdSearchResult($response->getContents()['total'], $response->getContents()['data'], $criteria, $context);
    }

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function update(string $id, array $data): void
    {
        if (empty($data['id'])) {
            throw new \InvalidArgumentException('Id is not provided for update payload');
        }
        $id = $data['id'];

        $context = $this->buildContext();
        $this->httpClient->patch(
            $this->getEntityEndpoint($id),
            MediaType::APPLICATION_JSON,
            MediaType::APPLICATION_JSON_API,
            $data,
            $context
        );
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

    private function getCloneEndpoint(string $entityId): string
    {
        return sprintf('/api/_action/clone/%s/%s', $this->getSluggedEntityName(), $entityId);
    }

    private function getCreateVersionEndpoint(string $entityId): string
    {
        return sprintf('/api/_action/version/%s/%s', $this->getSluggedEntityName(), $entityId);
    }

    private function getDeleteVersionEndpoint(string $entityId, string $versionId): string
    {
        return sprintf('/api/_action/version/%s/%s/%s', $versionId, $this->getSluggedEntityName(), $entityId);
    }

    private function getEntityEndpoint(?string $entityId = null): string
    {
        return sprintf('/api/%s/%s', $this->getSluggedEntityName(), $entityId ?? '');
    }

    private function getMergeVersionEndpoint(string $versionId): string
    {
        return sprintf('/api/_action/version/merge/%s/%s', $this->getSluggedEntityName(), $versionId);
    }

    private function getSearchApiUrl(): string
    {
        return sprintf('/api/search/%s', $this->getSluggedEntityName());
    }

    private function getSearchIdsApiUrl(): string
    {
        return sprintf('/api/search-ids/%s', $this->getSluggedEntityName());
    }

    private function getSluggedEntityName(): string
    {
        return str_replace('_', '-', $this->definition->getEntityName());
    }
}
