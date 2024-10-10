<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository;

use Vin\ShopwareSdk\Context\ContextBuilderFactoryInterface;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Http\HttpClientInterface;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;

final class RepositoryProvider implements RepositoryProviderInterface
{
    /**
     * @var array<string, RepositoryInterface>
     */
    private array $repositories = [];

    public function __construct(
        private readonly DefinitionProviderInterface $definitionProvider,
        private readonly ContextBuilderFactoryInterface $contextBuilderFactory,
        private readonly HttpClientInterface $httpClient,
        private readonly HydratorInterface $entityHydrator
    ) {
    }

    public function getRepository(string $entityName): RepositoryInterface
    {
        if (array_key_exists($entityName, $this->repositories) === false) {
            $definition = $this->definitionProvider->getDefinition($entityName);
            $this->repositories[$entityName] = new EntityRepository($definition, $this->contextBuilderFactory, $this->httpClient, $this->entityHydrator);
        }

        return $this->repositories[$entityName];
    }
}
