<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\HydratorInterface;
use Vin\ShopwareSdk\Repository\EntityRepository;
use Vin\ShopwareSdk\Repository\RepositoryInterface;

final class RepositoryFactory
{
    public static function createFromDefinition(
        EntityDefinition $definition,
        ?string $route = null,
        ?HydratorInterface $hydrator = null,
        string $shopwareVersion = '0.0.0.0'
    ): EntityRepository {
        if (! $route) {
            $route = str_replace('_', '-', $definition->getEntityName());
            $route = sprintf('/%s', $route);
        }

        if (! $hydrator instanceof HydratorInterface) {
            HydratorFactory::create(shopwareVersion: $shopwareVersion);
        }

        return new EntityRepository($definition->getEntityName(), $definition, $route, $hydrator);
    }

    public static function create(
        string $entity,
        ?string $route = null,
        ?DefinitionProviderInterface $definitionProvider = null,
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

        if (! $hydrator instanceof HydratorInterface) {
            HydratorFactory::create(shopwareVersion: $shopwareVersion);
        }

        return new EntityRepository($entity, $definition, $route, $hydrator);
    }
}
