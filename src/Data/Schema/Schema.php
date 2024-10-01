<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Struct;

class Schema extends Struct
{
    public function __construct(
        public string $entity,
        public PropertyCollection $properties
    ) {
    }

    public static function createFromRaw(string $entity, array $properties): self
    {
        $propertiesCollection = [];

        foreach ($properties as $keyProperty => $property) {
            $flags = $property['flags'] ?? [];
            $flagCollection = [];

            foreach ($flags as $key => $flag) {
                $flagCollection[$key] = new Flag($key, $flag);
            }

            $propertiesCollection[$keyProperty] = new Property(
                $keyProperty,
                $property['type'],
                new FlagCollection($flagCollection),
                $property
            );
        }

        return new self($entity, new PropertyCollection($propertiesCollection));
    }
}
