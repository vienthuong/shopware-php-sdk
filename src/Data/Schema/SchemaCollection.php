<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @method Schema|null get($key)
 * @method Schema|null first()
 * @method Schema|null last()
 */
class SchemaCollection extends Collection
{
    public function __construct(iterable $elements = [])
    {
        $elements = $elements instanceof \Traversable ? iterator_to_array($elements) : (array) $elements;

        /** @var Schema $element */
        foreach ($elements as $element) {
            $this->set($element->entity, $element);
        }
    }

    protected function getExpectedClass(): string
    {
        return Schema::class;
    }
}
