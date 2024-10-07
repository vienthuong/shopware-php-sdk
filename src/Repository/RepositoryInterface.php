<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

interface RepositoryInterface
{
    public function getDefinition(): EntityDefinition;

    public function searchIds(Criteria $criteria): IdSearchResult;

    public function get(string $id, Criteria $criteria): ?Entity;

    public function search(Criteria $criteria): EntitySearchResult;

    public function update(array $data): void;

    public function create(array $data): void;

    public function clone(string $id, ?CloneBehaviour $cloneBehaviour = null): string;

    public function createNew(array $data): Entity;

    public function delete(string $id): void;

    public function syncDeleted(array $ids): ApiResponse;

    public function createVersion(string $id, ?string $versionId = null, ?string $versionName = null): VersionResponse;

    public function mergeVersion(string $versionId): void;

    public function deleteVersion(string $id, string $versionId): void;
}
