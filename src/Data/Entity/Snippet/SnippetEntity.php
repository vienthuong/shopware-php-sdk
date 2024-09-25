<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Snippet;

use Vin\ShopwareSdk\Data\Entity\SnippetSet\SnippetSetEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SnippetEntity extends Entity
{
    public ?string $setId = null;

    public ?string $translationKey = null;

    public ?string $value = null;

    public ?string $author = null;

    public ?SnippetSetEntity $set = null;
}
