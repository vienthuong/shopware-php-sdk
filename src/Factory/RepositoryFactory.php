<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Repository\EntityRepository;
use Vin\ShopwareSdk\Repository\RepositoryInterface;

class RepositoryFactory
{
    private const RESOURCES_PATH = __DIR__ . '/../Resources/entity-mapping.json';

    private static array $mapping = [];

    public static function createFromDefinition(EntityDefinition $definition, ?string $route = null): RepositoryInterface
    {
        if (! $route) {
            $route = str_replace('_', '-', $definition->getEntityName());
            $route = sprintf('/%s', $route);
        }

        return new EntityRepository($definition->getEntityName(), $definition, $route, HydratorFactory::create());
    }

    public static function create(string $entity, ?string $route = null): RepositoryInterface
    {
        if (! $route) {
            $route = sprintf('/%s', str_replace('_', '-', $entity));
        }

        $definition = self::getDefinition($entity);

        return new EntityRepository($entity, $definition, $route, HydratorFactory::create());
    }

    public static function setEntityMapping(array $mapping): void
    {
        self::$mapping = $mapping;
    }

    public static function addEntityMapping(array $mapping): void
    {
        self::$mapping = array_merge(self::$mapping, $mapping);
    }

    public static function loadDefaultEntityMapping(): void
    {
        try {
            $mapping = (string) file_get_contents(self::RESOURCES_PATH);
            self::$mapping = json_decode($mapping, true);
        } catch (\JsonException) {
            throw new \RuntimeException('Could not load default entity mapping');
        }
    }

    private static function getDefinition(string $entity): EntityDefinition
    {
        if (empty(self::$mapping)) {
            self::loadDefaultEntityMapping();
        }

        if (! array_key_exists($entity, self::$mapping) || ! class_exists(self::$mapping[$entity])) {
            throw new \RuntimeException(sprintf('Could not find definition for entity %s', $entity));
        }

        $definitionClass = self::$mapping[$entity];

        /** @var EntityDefinition $definition */
        $definition = new $definitionClass();

        return $definition;
    }
}
