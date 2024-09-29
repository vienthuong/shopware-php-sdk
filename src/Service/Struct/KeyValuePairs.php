<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Collection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method KeyValuePair[] getIterator()
 * @method KeyValuePair[] getElements()
 * @method KeyValuePair|null get(string $key)
 * @method KeyValuePair|null first()
 * @method KeyValuePair|null last()
 */
class KeyValuePairs extends Collection
{
    /**
     * @param KeyValuePair $element
     */
    public function add($element): void
    {
        $this->set($element->getKey(), $element);
    }

    /**
     * @param KeyValuePair $element
     */
    public function set($key, $element): void
    {
        parent::set($element->getKey(), $element);
    }

    protected function getExpectedClass(): ?string
    {
        return KeyValuePair::class;
    }
}
