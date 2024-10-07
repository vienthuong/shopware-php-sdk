<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Service\SyncServiceInterface;

final class RepositoryProvider implements RepositoryProviderInterface
{
    /**
     * @var array<string, RepositoryInterface>
     */
    private array $repositories = [];

    public function __construct(
        private readonly DefinitionProviderInterface $definitionProvider,
        private readonly ContextBuilderFactoryInterface $contextBuilderFactory,
        private readonly SyncServiceInterface $syncService,
        private readonly HydratorInterface $entityHydrator
    ) {
    }

    public function getRepository(string $entityName): RepositoryInterface
    {
        if (array_key_exists($entityName, $this->repositories) === false) {
            $route = sprintf('/%s', str_replace('_', '-', $entityName));
            $definition = $this->definitionProvider->getDefinition($entityName);
            $this->repositories[$entityName] = new EntityRepository(
                $entityName,
                $definition,
                $route,
                $this->contextBuilderFactory,
                $this->syncService,
                $this->entityHydrator
            );
        }

        return $this->repositories[$entityName];
    }
}
