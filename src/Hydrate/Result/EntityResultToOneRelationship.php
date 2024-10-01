<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Result;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;

final class EntityResultToOneRelationship extends EntityResultRelationship
{
    /**
     * @param callable(Entity, string): mixed $propertyGetter
     * @param callable(Entity, string, mixed): void $propertySetter
     */
    public function hydrateRelationship(
        Entity $entity,
        callable $propertyGetter,
        callable $propertySetter,
        AttributeHydratorInterface $attributeHydrator,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
    ): void {
        $relatedEntityResult = $entityResultCache->get($this->relatedEntityName, $this->relatedEntityId);
        $relatedEntity = $relatedEntityResult->getEntity($attributeHydrator, $definitionProvider);

        $propertySetter($entity, $this->propertyNameInEntity, $relatedEntity);
    }
}
