<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\NewsletterRecipientTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\NewsletterRecipient\NewsletterRecipientEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Tag\TagEntity;

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
