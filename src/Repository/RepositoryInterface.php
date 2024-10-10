<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;

interface RepositoryInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function clone(string $id, ?CloneBehaviour $cloneBehaviour = null): string;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function create(array $data): void;

    public function createNew(array $data): Entity;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function createVersion(string $id, ?string $versionId = null, ?string $versionName = null): VersionResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function delete(string $id): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function deleteVersion(string $id, string $versionId): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function get(string $id, Criteria $criteria): ?Entity;

    public function getDefinition(): EntityDefinition;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function mergeVersion(string $versionId): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function search(Criteria $criteria): EntitySearchResult;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function searchIds(Criteria $criteria): IdSearchResult;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function update(string $id, array $data): void;
}
