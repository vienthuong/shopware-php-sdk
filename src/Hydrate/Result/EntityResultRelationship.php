<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Result;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;

abstract class EntityResultRelationship
{
    final public function __construct(
        public string $propertyNameInEntity,
        public string $relatedEntityName,
        public string $relatedEntityId
    ) {
    }

    /**
     * @param array{type: string, id: string} $data
     */
    public static function fromDataAndPropertyName(array $data, string $propertyName): static
    {
        return new static($propertyName, $data['type'], $data['id']);
    }

    /**
     * @param callable(Entity, string): mixed $propertyGetter
     * @param callable(Entity, string, mixed): void $propertySetter
     */
    abstract public function hydrateRelationship(
        Entity $entity,
        callable $propertyGetter,
        callable $propertySetter,
        AttributeHydratorInterface $attributeHydrator,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
    ): void;
}
