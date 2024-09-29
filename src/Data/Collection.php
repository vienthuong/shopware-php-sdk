<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

abstract class Collection extends Struct implements \IteratorAggregate, \Countable
{
    protected array $elements = [];

    public function __construct(iterable $elements = [])
    {
        $elements = $elements instanceof \Traversable ? iterator_to_array($elements) : (array) $elements;

        foreach ($elements as $key => $element) {
            $this->set($key, $element);
        }
    }

    /**
     * @param mixed|null $element
     */
    public function add($element): void
    {
        $this->validateType($element);

        $this->elements[] = $element;
    }

    /**
     * @param mixed|null $element
     * @param mixed|null $key
     */
    public function set($key, $element): void
    {
        $this->validateType($element);

        if ($key === null) {
            $this->elements[] = $element;
        } else {
            $this->elements[$key] = $element;
        }
    }

    /**
     * @param mixed|null $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        if ($this->has($key)) {
            return $this->elements[$key];
        }

        return null;
    }

    public function clear(): void
    {
        $this->elements = [];
    }

    public function count(): int
    {
        return \count($this->elements);
    }

    public function getKeys(): array
    {
        return array_keys($this->elements);
    }

    /**
     * @param mixed|null $key
     */
    public function has($key): bool
    {
        return \array_key_exists($key, $this->elements);
    }

    public function map(\Closure $closure): array
    {
        return array_map($closure, $this->elements);
    }

    /**
     * @param mixed|null $initial
     * @return mixed
     */
    public function reduce(\Closure $closure, $initial = null)
    {
        return array_reduce($this->elements, $closure, $initial);
    }

    public function fmap(\Closure $closure): array
    {
        return array_filter($this->map($closure));
    }

    public function sort(\Closure $closure): void
    {
        uasort($this->elements, $closure);
    }

    /**
     * @return static
     */
    public function filterInstance(string $class)
    {
        return $this->filter(static fn ($item) => $item instanceof $class);
    }

    /**
     * @return static
     */
    public function filter(\Closure $closure)
    {
        return $this->createNew(array_filter($this->elements, $closure));
    }

    /**
     * @return static
     */
    public function slice(int $offset, ?int $length = null)
    {
        return $this->createNew(\array_slice($this->elements, $offset, $length, true));
    }

    public function getElements(): iterable
    {
        return $this->elements;
    }

    public function jsonSerialize(): array
    {
        return array_values(array_map(fn (Struct $element) => $element->jsonSerialize(), $this->elements));
    }

    public function first(): ?Struct
    {
        return array_values($this->elements)[0] ?? null;
    }

    /**
     * @return mixed
     */
    public function last()
    {
        return array_values($this->elements)[\count($this->elements) - 1] ?? null;
    }

    /**
     * @param int|string $key
     */
    public function remove($key): void
    {
        unset($this->elements[$key]);
    }

    public function getIterator(): \Generator
    {
        yield from $this->elements;
    }

    protected function getExpectedClass(): ?string
    {
        return null;
    }

    /**
     * @return static
     */
    protected function createNew(iterable $elements = [])
    {
        return new static($elements);
    }

    protected function validateType(mixed $element): void
    {
        $expectedClass = $this->getExpectedClass();
        if ($expectedClass === null) {
            return;
        }

        if (! $element instanceof $expectedClass) {
            $elementClass = $element::class;

            throw new \InvalidArgumentException(
                sprintf('Expected collection element of type %s got %s', $expectedClass, $elementClass)
            );
        }
    }
}
