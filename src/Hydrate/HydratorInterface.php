<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate;

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

interface HydratorInterface
{
    public function schema(string $entity, Context $context): Schema;

    public function hydrateSearchResult(array $response, Context $context, ?string $entityName): EntityCollection;
}
