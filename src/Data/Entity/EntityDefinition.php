<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity;

use Vin\ShopwareSdk\Data\Schema\Schema;

interface EntityDefinition
{
    public function getEntityName(): string;

    public function getEntityClass(): string;

    public function getEntityCollection(): string;

    public function getSchema(): Schema;
}
