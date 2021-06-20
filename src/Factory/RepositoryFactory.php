<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Repository\EntityRepository;
use Vin\ShopwareSdk\Repository\RepositoryInterface;

class RepositoryFactory
{
    private static array $mapping = [];

    private const RESOURCES_PATH = __DIR__ . '/../Resources/entity-mapping.json';

    public static function create(string $entity, ?string $route = null): RepositoryInterface
    {
        if (!$route) {
            $route = sprintf('/%s', $entity);
        }

        $definition = static::getDefinition($entity);

        return new EntityRepository($entity, $definition, $route);
    }

    private static function getDefinition(string $entity): EntityDefinition
    {
        if (empty(self::$mapping)) {
            $mapping = file_get_contents(self::RESOURCES_PATH);
            self::$mapping = json_decode($mapping, true);
        }

        if (!array_key_exists($entity, self::$mapping)) {
            throw new \Exception('Definition not found for Entity ' . $entity);
        }

        $definitionClass = self::$mapping[$entity];

        return new $definitionClass;
    }
}
