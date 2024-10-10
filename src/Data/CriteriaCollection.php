<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

/**
 * @method array<string, Criteria> getIterator()
 * @method array<string, Criteria> getElements()
 * @method Criteria|null get(string $key)
 * @method Criteria|null first()
 * @method Criteria|null last()
 */
class CriteriaCollection extends Collection
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed|null $element
     */
    public function add($element): void
    {
        throw new \RuntimeException('Criteria have to be added with an entity name. Use `set` method instead.');
    }

    public function getExpectedClass(): string
    {
        return Criteria::class;
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function parse(): array
    {
        $parsed = [];
        /** @var Criteria $criteria */
        foreach ($this->elements as $key => $criteria) {
            $parsed[$key] = $criteria->parse();
        }

        return $parsed;
    }

    /**
     * @param string $key
     * @param Criteria $element
     */
    public function set($key, $element): void
    {
        if (is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Expected key of type string. Got %s.', gettype($key)));
        }

        parent::set($key, $element);
    }
}
