<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\SnippetSet;

use Vin\ShopwareSdk\Data\Entity\v0000\Snippet\SnippetCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannelDomain\SalesChannelDomainCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SnippetSetEntity extends Entity
{
    public ?string $name = null;

    public ?string $baseFile = null;

    public ?string $iso = null;

    public ?SnippetCollection $snippets = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;
}
