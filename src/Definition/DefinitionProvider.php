<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Exception\DefinitionNotFoundException;

final class DefinitionProvider implements DefinitionProviderInterface
{
    private readonly DefinitionCollection $definitionCollection;

    /**
     * @param iterable<DefinitionCollectionPopulator> $definitionCollectionPopulators
     */
    public function __construct(
        private readonly iterable $definitionCollectionPopulators,
        private readonly string $shopwareVersion
    ) {
        $this->definitionCollection = new DefinitionCollection();
        foreach ($this->definitionCollectionPopulators as $definitionCollectionPopulator) {
            $definitionCollectionPopulator->populateDefinitionCollection($this->definitionCollection, $this->shopwareVersion);
        }
    }

    public function getDefinition(string $entityName): EntityDefinition
    {
        return $this->definitionCollection->get($entityName) ?? throw new DefinitionNotFoundException($entityName);
    }
}
