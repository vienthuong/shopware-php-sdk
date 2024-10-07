<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Result\SearchResult;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;

class EntityHydrator implements HydratorInterface
{
    public function __construct(
        private readonly DefinitionProviderInterface $definitionProvider,
        private readonly AttributeHydratorInterface $attributeHydrator,
        private readonly RelationshipsParserInterface $relationshipsParser,
        private readonly ExtensionParserInterface $extensionParser
    ) {
    }

    /**
     * @param array<string, mixed> $response
     */
    public function hydrateSearchResult(array $response, ?string $entityName = null): EntityCollection
    {
        $collectionClass = EntityCollection::class;

        if ($entityName !== null) {
            $definition = $this->definitionProvider->getDefinition($entityName);
            $collectionClass = $definition->getEntityCollection();
        }

        if (array_key_exists('data', $response) === false || is_array($response['data']) === false || $response['data'] === []) {
            /** @var EntityCollection $hydrated */
            $hydrated = new $collectionClass([]);

            return $hydrated;
        }

        $searchResult = new SearchResult($response['data'], $response['included'] ?? []);

        /** @var EntityCollection $collection */
        $collection = new $collectionClass();
        foreach ($searchResult->getEntities($this->attributeHydrator, $this->relationshipsParser, $this->extensionParser, $this->definitionProvider) as $entity) {
            $collection->set($entity->id, $entity);
        }

        return $collection;
    }
}
