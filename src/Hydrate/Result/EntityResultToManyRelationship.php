<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Result;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;

final class EntityResultToManyRelationship extends EntityResultRelationship
{
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

        /** @var EntityCollection|null $entityProperty */
        $entityProperty = $propertyGetter($entity, $this->propertyNameInEntity);
        if ($entityProperty === null) {
            $relatedDefinition = $definitionProvider->getDefinition($this->relatedEntityName);
            $entityCollectionClass = $relatedDefinition->getEntityCollection();

            /** @var EntityCollection $entityProperty */
            $entityProperty = new $entityCollectionClass();
        }

        $entityProperty->add($relatedEntity);
        $propertySetter($entity, $this->propertyNameInEntity, $entityProperty);
    }
}
