<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Result;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Struct;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;

/**
 * @phpstan-import-type ToOneRelationshipData from RelationshipsParserInterface
 * @phpstan-import-type ToManyRelationshipData from RelationshipsParserInterface
 */
final class EntityExtensionResult
{
    private bool $relationshipsAreParsed = false;

    /**
     * @var EntityResultRelationship[]
     */
    private array $parsedRelationships;

    public function __construct(
        public string $id
    ) {
    }

    /**
     * @param array{id: string} $data
     */
    public static function fromData(array $data): self
    {
        return new self($data['id']);
    }

    public function hydrateExtension(
        Entity $entity,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
    ): void {
        $entityResult = $entityResultCache->get('extension', $this->id);
        $this->buildRelationships($entityResult->relationships, $relationshipsParser);

        $propertyGetter = static fn (Entity $entity, string $propertyName): ?Struct => $entity->getExtension($propertyName);
        $propertySetter = static function (Entity $entity, string $propertyName, mixed $value): void {
            $entity->addExtension($propertyName, $value);
        };

        foreach ($this->parsedRelationships as $relationship) {
            $relationship->hydrateRelationship(
                $entity,
                $propertyGetter,
                $propertySetter,
                $attributeHydrator,
                $entityResultCache,
                $definitionProvider
            );
        }
    }

    /**
     * @param array<string, ToOneRelationshipData|ToManyRelationshipData> $relationships
     */
    private function buildRelationships(array $relationships, RelationshipsParserInterface $relationshipsParser): void
    {
        if ($this->relationshipsAreParsed) {
            return;
        }

        $this->parsedRelationships = $relationshipsParser->parseRelationships($relationships);
        $this->relationshipsAreParsed = true;
    }
}
