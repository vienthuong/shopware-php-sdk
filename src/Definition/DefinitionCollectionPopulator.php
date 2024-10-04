<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

interface DefinitionCollectionPopulator
{
    public static function priority(): int;

    public function populateDefinitionCollection(DefinitionCollection $definitionCollection, string $shopwareVersion): void;
}
