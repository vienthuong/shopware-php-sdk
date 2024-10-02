<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Shopware;

use Vin\ShopwareSdk\Data\Schema\SchemaCollection;

interface EntitySchemaCollectionProviderInterface
{
    public function getSchemaCollection(): SchemaCollection;
}
