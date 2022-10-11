<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate;

use Exception;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Entity\Custom\CustomDefinition;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Factory\RepositoryFactory;
use Vin\ShopwareSdk\Service\InfoService;

class EntityHydrator implements HydratorInterface
{
    // using cache is recommended if you want to use circular references
    protected bool $useCache;

    protected array $cache = [];

    protected array $cacheSchema = [];

    public function __construct(
        bool $useCache = false
    )
    {
        $this->useCache = $useCache;
    }

    public function schema(string $entity, Context $context): Schema
    {
        if (array_key_exists($entity, $this->cacheSchema)) {
            return $this->cacheSchema[$entity];
        }

        $infoService = new InfoService($context);

        $schema = $infoService->getSchema($entity);

        if ($schema === null) {
            $schemas = $infoService->refreshSchema(false);

            $schema = $schemas->get($entity);

            if ($schema === null) {
                throw new Exception('Schema for entity: ' . $entity . ' not found');
            }
        }

        return $schema;
    }

    public function hydrateSearchResult(array $response, Context $context): EntityCollection
    {
        if (empty($response) || empty($response['data'])) {
            return new EntityCollection();
        }

        $entities = [];

        foreach ($response['data'] as $entityRaw) {
            $entity = $this->hydrateEntity($entityRaw['type'], $entityRaw, $response, $context);
            $entities[$entity->id] = $entity;
        }

        $collectionClass = EntityCollection::class;

        $data = $response['data'];
        $first = current($data);

        if (!empty($first['type'])) {
            $repository = RepositoryFactory::create($first['type']);
            $collectionClass = $repository->getDefinition()->getEntityCollection();
        }

        /** @var EntityCollection $collection */
        $collection = new $collectionClass($entities);

        return $collection;
    }

    private function hydrateEntity(string $entityName, array $entityRaw, array $data, Context $context): Entity
    {
        if($this->useCache) {
            $cacheKey = $entityRaw['type'] . '-' . $entityRaw['id'];

            if (array_key_exists($cacheKey, $this->cache)) {
                return $this->cache[$cacheKey];
            }
        }

        $repository = RepositoryFactory::create($entityName);
        $definition = $repository->getDefinition();
        $entityClass = $definition->getEntityClass();

        $attributes = $entityRaw['attributes'];
        $attributes['id'] = $entityRaw['id'];

        /** @var Entity $entity */
        $entity = new $entityClass;
        $entity->internalSetEntityName($definition->getEntityName());

        $entitySchema = $definition instanceof CustomDefinition ? $this->schema($entityName, $context) : $definition->getSchema();

        $entity = $this->hydrateEmptyJsonFields($entity, $attributes, $entitySchema);

        $relationships = $entityRaw['relationships'] ?? [];

        // reserve cache before relationships hydration. This prevents circular references to fail
        if($this->useCache && isset($cacheKey)) {
            $this->cache[$cacheKey] = $entity;
        }

        return $this->hydrateRelationships($entity, $relationships, $entitySchema, $data, $context);
    }

    private function hydrateRelationships(Entity $entity, array $relationships, Schema $entitySchema, array $data, Context $context): Entity
    {
        /** @var string $property */
        foreach ($relationships as $property => $relationship) {
            if ($property === 'extensions') {
                $entity->addExtensions($this->hydrateExtensions($entity, $entitySchema, $data, $context));
            }

            if (!$entitySchema->properties->has($property)) {
                continue;
            }

            $field = $entitySchema->properties->get($property);

            if ($field === null) {
                continue;
            }

            if ($field->isToManyAssociation()) {
                $type = !empty($relationship['data'][0]['type']) ? $relationship['data'][0]['type'] : '';
                if ($type) {
                    $repository = RepositoryFactory::create($type);
                    $definition = $repository->getDefinition();

                    $entity->setProperty($property, $this->hydrateToMany($definition, $relationship, $data, $context));
                }

                continue;
            }

            if ($field->isToOneAssociation() && !empty($relationship['data'])) {
                $nestedEntity = $this->hydrateToOne($relationship, $data, $context);

                if ($nestedEntity) {
                    $entity->setProperty($property, $nestedEntity);
                }
            }
        }

        return $entity;
    }

    private function hydrateExtensions(Entity $entity, Schema $entitySchema, array $data, Context $context): array
    {
        $extension = $this->getIncluded('extension', $entity->id, $data) ?? [];

        $attributes = $extension['attributes'] ?? [];
        $relationships = $extension['relationships'] ?? [];

        foreach ($relationships as $property => $relationship) {
            if (!$entitySchema->properties->has($property)) {
                continue;
            }

            $field = $entitySchema->properties->get($property);

            if ($field === null) {
                continue;
            }

            if ($field->isToManyAssociation()) {
                $type = !empty($relationship['data'][0]['type']) ? $relationship['data'][0]['type'] : null;
                if ($type) {
                    $repository = RepositoryFactory::create($type);
                    $definition = $repository->getDefinition();

                    $attributes[$property] = $this->hydrateToMany($definition, $relationship, $data, $context);
                }

                continue;
            }

            if ($field->isToOneAssociation() && array_key_exists('data', $relationship) && !empty($relationship['data'])) {
                $nestedEntity = $this->hydrateToOne($relationship, $data, $context);

                if ($nestedEntity) {
                    $attributes[$property] = $nestedEntity;
                }
            }
        }

        return $attributes;
    }

    private function hydrateToMany(EntityDefinition $definition, array $value, array $rawData, Context $context): EntityCollection
    {
        $collectionClass = $definition->getEntityCollection();
        /** @var EntityCollection $collection */
        $collection = new $collectionClass();

        $data = $value['data'] ?? [];

        foreach ($data as $datum) {
            $nestedRaw = $this->getIncluded($datum['type'], $datum['id'], $rawData);

            $nestedEntity = null;

            if ($nestedRaw) {
                $nestedEntity = $this->hydrateEntity($datum['type'], $nestedRaw, $rawData, $context);
            }

            if (!empty($nestedEntity)) {
                $collection->add($nestedEntity);
            }
        }

        return $collection;
    }

    private function hydrateToOne(array $value, array $data, Context $context): ?Entity
    {
        $nestedRaw = $this->getIncluded($value['data']['type'], $value['data']['id'], $data);

        if (empty($nestedRaw)) {
            return null;
        }

        return $this->hydrateEntity($value['data']['type'], $nestedRaw, $data, $context);
    }

    private function hydrateEmptyJsonFields(Entity $entity, array $attributes, Schema $entitySchema): Entity
    {
        foreach ($attributes as $attributeKey => $attributeValue) {
            if (!$entitySchema->properties->has($attributeKey)) {
                $entity->setProperty($attributeKey, $attributeValue);

                continue;
            }

            $field = $entitySchema->properties->get($attributeKey);

            if ($field === null) {
                continue;
            }

            if (!$field->isJsonField()) {
                $entity->setProperty($attributeKey, $attributeValue);

                continue;
            }

            if (is_array($attributeValue) && count($attributeValue) <= 0 && $field->isJsonObjectField()) {
                $entity->setProperty($attributeKey, []);

                continue;
            }

            if (empty($attributeValue) && $field->isJsonListField()) {
                $entity->setProperty($attributeKey, []);
                continue;
            }

            $entity->setProperty($attributeKey, $attributeValue);
        }

        return $entity;
    }

    private function getIncluded(string $key, string $id, array $data = []): ?array
    {
        $included = $data['included'] ?? [];

        foreach ($included as $item) {
            if (array_key_exists('id', $item) && $item['id'] === $id && $item['type'] === $key) {
                return $item;
            }
        }

        return null;
    }
}
