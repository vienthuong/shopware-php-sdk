<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\SnippetSet;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6583\SalesChannelDomain\SalesChannelDomainCollection;
use Vin\ShopwareSdk\Data\Entity\v6583\Snippet\SnippetCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetSetEntity extends Entity
{
    public ?string $name = null;

    public ?string $baseFile = null;

    public ?string $iso = null;

    public ?SnippetCollection $snippets = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;
}
