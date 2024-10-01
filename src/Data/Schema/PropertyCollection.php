<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @method Property|null get($key)
 * @method Property|null first()
 * @method Property|null last()
 */
class PropertyCollection extends Collection
{
    public function __construct(iterable $elements = [])
    {
        $elements = $elements instanceof \Traversable ? iterator_to_array($elements) : (array) $elements;

        /** @var Property $element */
        foreach ($elements as $element) {
            $this->set($element->name, $element);
        }
    }

    protected function getExpectedClass(): ?string
    {
        return Property::class;
    }
}
