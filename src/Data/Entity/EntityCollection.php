<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @method void                add(Entity $entity)
 * @method void                set(string $key, Entity $entity)
 * @method EntityCollection    filter(\Closure $closure)()
 * @method EntityCollection    createNew(iterable $elements = [])
 * @method Entity[]    getIterator()
 * @method Entity[]    getElements()
 * @method Entity|null get(string $key)
 * @method Entity|null first()
 * @method Entity|null last()
 */
class EntityCollection extends Collection
{
    public function getIds(): array
    {
        return $this->fmap(static function (Entity $entity) {
            return $entity->id;
        });
    }

    /**
     * @param mixed $value
     */
    public function filterByProperty(string $property, $value): self
    {
        return $this->filter(
            static function (Entity $struct) use ($property, $value) {
                return $struct->$property === $value;
            }
        );
    }

    /**
     * @param mixed $value
     */
    public function filterAndReduceByProperty(string $property, $value): self
    {
        $filtered = [];

        foreach ($this->getIterator() as $key => $struct) {
            if ($struct->$property !== $value) {
                continue;
            }
            $filtered[] = $struct;
            $this->remove($key);
        }

        return $this->createNew($filtered);
    }

    public function merge(self $collection): void
    {
        /** @var Entity $entity */
        foreach ($collection as $entity) {
            if ($this->has($entity->id)) {
                continue;
            }
            $this->add($entity);
        }
    }

    public function insert(int $position, Entity $entity): void
    {
        $items = array_values($this->elements);

        $this->elements = [];
        foreach ($items as $index => $item) {
            if ($index === $position) {
                $this->add($entity);
            }
            $this->add($item);
        }
    }

    public function filterInstance(string $class): static
    {
        // @phpstan-ignore-next-line - TODO: fix error
        return $this->filter(static function ($item) use ($class) {
            return $item instanceof $class;
        });
    }

    public function getExpectedClass(): string
    {
        return Entity::class;
    }
}
