<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Result;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Hydrate\Cache\EntityResultCache;
use Vin\ShopwareSdk\Hydrate\Service\AttributeHydratorInterface;
use Vin\ShopwareSdk\Hydrate\Service\ExtensionParserInterface;
use Vin\ShopwareSdk\Hydrate\Service\RelationshipsParserInterface;

/**
 * @phpstan-import-type ToOneRelationshipData from RelationshipsParserInterface
 * @phpstan-import-type ToManyRelationshipData from RelationshipsParserInterface
 * @phpstan-type EntityResultData array{
 *     type: string,
 *     id: string,
 *     attributes: array<string, mixed>,
 *     relationships?: array<string, ToOneRelationshipData|ToManyRelationshipData>
 * }
 */
final class EntityResult
{
    private bool $entityIsBuilt = false;

    private Entity $entity;

    private bool $relationshipsAreParsed = false;

    /**
     * @var EntityResultRelationship[]
     */
    private array $parsedRelationships;

    private bool $extensionsAreParsed = false;

    /**
     * @var EntityExtensionResult[]
     */
    private array $extensions;

    /**
     * @param array<string, mixed> $attributes
     * @param array<string, ToOneRelationshipData|ToManyRelationshipData> $relationships
     */
    public function __construct(
        public string $id,
        public array $attributes,
        public array $relationships,
        public string $entityName,
    ) {
    }

    /**
     * @param EntityResultData $data
     */
    public static function fromData(array $data): self
    {
        return new self($data['id'], $data['attributes'], $data['relationships'] ?? [], $data['type']);
    }

    public function buildEntity(
        AttributeHydratorInterface $attributeHydrator,
        DefinitionProviderInterface $definitionProvider,
    ): void {
        $definition = $definitionProvider->getDefinition($this->entityName);
        /** @var class-string<Entity> $entityClass */
        $entityClass = $definition->getEntityClass();

        $this->entity = new $entityClass();
        $this->entity->internalSetEntityName($this->entityName);
        $this->entity->id = $this->id;
        $attributeHydrator->hydrateAttributes($this->entity, $this->entityName, $this->attributes);
    }

    public function hydrateExtensions(
        Entity $entity,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        ExtensionParserInterface $extensionParser,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
    ): void {
        $this->buildExtensions($extensionParser);

        foreach ($this->extensions as $extension) {
            $extension->hydrateExtension(
                $entity,
                $attributeHydrator,
                $relationshipsParser,
                $entityResultCache,
                $definitionProvider,
            );
        }
    }

    public function hydrateRelationships(
        Entity $entity,
        AttributeHydratorInterface $attributeHydrator,
        RelationshipsParserInterface $relationshipsParser,
        EntityResultCache $entityResultCache,
        DefinitionProviderInterface $definitionProvider,
    ): void {
        $this->buildRelationships($relationshipsParser);
        $propertyGetter = static fn (Entity $entity, string $propertyName): mixed => $entity->getProperty($propertyName);
        $propertySetter = static function (Entity $entity, string $propertyName, mixed $value): void {
            $entity->setProperty($propertyName, $value);
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

    public function getEntity(
        AttributeHydratorInterface $attributeHydrator,
        DefinitionProviderInterface $definitionProvider
    ): Entity {
        if ($this->entityIsBuilt) {
            return $this->entity;
        }

        $this->buildEntity($attributeHydrator, $definitionProvider);
        $this->entityIsBuilt = true;

        return $this->entity;
    }

    private function buildExtensions(ExtensionParserInterface $extensionParser): void
    {
        if ($this->extensionsAreParsed) {
            return;
        }

        $this->extensions = $extensionParser->parseExtensions($this->relationships);
        $this->extensionsAreParsed = true;
    }

    private function buildRelationships(RelationshipsParserInterface $relationshipsParser): void
    {
        if ($this->relationshipsAreParsed) {
            return;
        }

        $this->parsedRelationships = $relationshipsParser->parseRelationships($this->relationships);
        $this->relationshipsAreParsed = true;
    }
}
