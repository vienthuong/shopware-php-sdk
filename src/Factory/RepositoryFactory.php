<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Context\ContextBuilderFactory;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\EntityRepository;
use Vin\ShopwareSdk\Repository\RepositoryInterface;
use Vin\ShopwareSdk\Service\ApiService;
use Vin\ShopwareSdk\Service\SyncService;
use Vin\ShopwareSdk\Service\SyncServiceInterface;

final class RepositoryFactory
{
    public static function createFromDefinition(
        EntityDefinition $definition,
        ContextBuilderFactory $contextBuilderFactory,
        ?string $route = null,
        ?SyncServiceInterface $syncService = null,
        ?HydratorInterface $hydrator = null,
        string $shopwareVersion = '0.0.0.0'
    ): EntityRepository {
        if (! $route) {
            $route = str_replace('_', '-', $definition->getEntityName());
            $route = sprintf('/%s', $route);
        }

        if (! $syncService instanceof SyncServiceInterface) {
            $apiService = new ApiService($contextBuilderFactory);
            $syncService = new SyncService($apiService);
        }

        if (! $hydrator instanceof HydratorInterface) {
            $hydrator = HydratorFactory::create(shopwareVersion: $shopwareVersion);
        }

        return new EntityRepository(
            $definition->getEntityName(),
            $definition,
            $route,
            $contextBuilderFactory,
            $syncService,
            $hydrator
        );
    }

    public static function create(
        string $entity,
        ContextBuilderFactory $contextBuilderFactory,
        ?string $route = null,
        ?DefinitionProviderInterface $definitionProvider = null,
        ?SyncServiceInterface $syncService = null,
        ?HydratorInterface $hydrator = null,
        string $shopwareVersion = '0.0.0.0'
    ): RepositoryInterface {
        if (! $route) {
            $route = sprintf('/%s', str_replace('_', '-', $entity));
        }

        if (! $definitionProvider instanceof DefinitionProviderInterface) {
            $definitionProvider = DefinitionProviderFactory::create(shopwareVersion: $shopwareVersion);
        }

        $definition = $definitionProvider->getDefinition($entity);

        if (! $syncService instanceof SyncServiceInterface) {
            $apiService = new ApiService($contextBuilderFactory);
            $syncService = new SyncService($apiService);
        }

        if (! $hydrator instanceof HydratorInterface) {
            $hydrator = HydratorFactory::create(shopwareVersion: $shopwareVersion);
        }

        return new EntityRepository(
            $entity,
            $definition,
            $route,
            $contextBuilderFactory,
            $syncService,
            $hydrator
        );
    }
}
