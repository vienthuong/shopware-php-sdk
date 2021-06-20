<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Repository\Struct\CloneBehaviour;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResult;
use Vin\ShopwareSdk\Repository\Struct\IdSearchResult;
use Vin\ShopwareSdk\Repository\Struct\VersionResponse;
use Vin\ShopwareSdk\Service\ApiResponse;

interface RepositoryInterface
{
    public function getDefinition(): EntityDefinition;

    public function searchIds(Criteria $criteria, Context $context): IdSearchResult;

    public function get(string $id, Criteria $criteria, Context $context): ?Entity;

    public function search(Criteria $criteria, Context $context): EntitySearchResult;

    public function update(array $data, Context $context): void;

    public function create(array $data, Context $context): void;

    public function clone(string $id, Context $context, ?CloneBehaviour $cloneBehaviour = null): string;

    public function createNew(array $data): Entity;

    public function delete(string $id, Context $context): void;

    public function syncDeleted(array $ids, Context $context): ApiResponse;

    public function createVersion(string $id, Context $context, ?string $versionId = null, ?string $versionName = null): VersionResponse;

    public function mergeVersion(string $versionId, Context $context): void;

    public function deleteVersion(string $id, string $versionId, Context $context): void;
}
