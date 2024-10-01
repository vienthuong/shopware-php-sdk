<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SnippetSet;

use Vin\ShopwareSdk\Data\Entity\Snippet\SnippetCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
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
