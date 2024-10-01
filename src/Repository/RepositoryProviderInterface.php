<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

interface RepositoryProviderInterface
{
    public function getRepository(string $entityName): RepositoryInterface;
}
