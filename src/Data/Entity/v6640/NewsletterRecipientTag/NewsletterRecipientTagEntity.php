<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\NewsletterRecipientTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\NewsletterRecipient\NewsletterRecipientEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NewsletterRecipientTagEntity extends Entity
{
    public ?string $newsletterRecipientId = null;
    public ?string $tagId = null;
    public ?NewsletterRecipientEntity $newsletterRecipient = null;
    public ?TagEntity $tag = null;
}
