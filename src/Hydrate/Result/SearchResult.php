<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Result;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;

final class SearchResult
{
    private readonly EntityResultCache $entityResultCache;

    /**
     * @param array{type: string, id: string, attributes: array<string, mixed>, relationships?: array<string, mixed>}[] $datasets
     * @param array{type: string, id: string, attributes: array<string, mixed>, relationships?: array<string, mixed>}[] $included
     */
    public function __construct(
        private readonly array $datasets,
        private readonly array $included,
    ) {
        $this->entityResultCache = new EntityResultCache();
    }

    /**
     * @return Entity[]
     */
    public function getEntities(
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        ExtensionParserInterface $extensionParser,
        DefinitionProviderInterface $definitionProvider,
    ): array {
        foreach ($this->included as $entityData) {
            $entityResult = EntityResult::fromData($entityData);
            $this->entityResultCache->set($entityResult->entityName, $entityResult->id, $entityResult);
        }

        foreach ($this->datasets as $entityData) {
            $entityResult = EntityResult::fromData($entityData);
            $this->entityResultCache->set($entityResult->entityName, $entityResult->id, $entityResult);
        }

        $entities = [];
        foreach ($this->datasets as $dataset) {
            $type = $dataset['type'];
            $id = $dataset['id'];

            $entityResult = $this->entityResultCache->get($type, $id);
            $entities[$id] = $entityResult->getEntity($attributeHydrator, $definitionProvider);
        }

        foreach ($this->entityResultCache->all() as $entityResult) {
            if ($entityResult->entityName === 'extension') {
                continue;
            }

            $entity = $entityResult->getEntity($attributeHydrator, $definitionProvider);
            $entityResult->hydrateRelationships(
                $entity,
                $attributeHydrator,
                $relationshipsParser,
                $this->entityResultCache,
                $definitionProvider
            );
            $entityResult->hydrateExtensions(
                $entity,
                $attributeHydrator,
                $relationshipsParser,
                $extensionParser,
                $this->entityResultCache,
                $definitionProvider
            );
        }

        return $entities;
    }
}
