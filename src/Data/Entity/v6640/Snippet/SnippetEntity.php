<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\Snippet;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\SnippetSet\SnippetSetEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetEntity extends Entity
{
    public ?string $setId = null;
    public ?string $translationKey = null;
    public ?string $value = null;
    public ?string $author = null;
    public ?SnippetSetEntity $set = null;
}
