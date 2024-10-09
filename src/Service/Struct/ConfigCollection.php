<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Collection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method Config[] getIterator()
 * @method Config[] getElements()
 * @method Config|null get(string $key)
 * @method Config|null first()
 * @method Config|null last()
 */
class ConfigCollection extends Collection
{
    /**
     * @param Config $element
     */
    public function add($element): void
    {
        $this->set($element->getKey(), $element);
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function parse(): array
    {
        $parsed = [];
        /** @var Config $config */
        foreach ($this->elements as $key => $config) {
            $parsed[$key] = $config->parse();
        }

        return $parsed;
    }

    /**
     * @param Config $element
     */
    public function set($key, $element): void
    {
        throw new \RuntimeException('Configs have to be added without a key. Use `add` method instead.');
    }

    protected function getExpectedClass(): ?string
    {
        return Config::class;
    }
}
