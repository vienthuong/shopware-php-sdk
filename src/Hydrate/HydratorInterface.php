<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

interface HydratorInterface
{
    public function hydrateSearchResult(array $response, ?string $entityName): EntityCollection;
}
