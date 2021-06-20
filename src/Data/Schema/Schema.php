<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Struct;

class Schema extends Struct
{
    public string $entity;

    public PropertyCollection $properties;

    public function __construct(string $entity, PropertyCollection $properties)
    {
        $this->entity = $entity;
        $this->properties = $properties;
    }
}
