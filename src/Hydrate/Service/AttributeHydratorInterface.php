<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Service;

use Vin\ShopwareSdk\Data\Entity\Entity;

interface AttributeHydratorInterface
{
    /**
     * @param array<string, mixed> $attributes
     */
    public function hydrateAttributes(Entity $entity, string $entityName, array $attributes): void;
}
