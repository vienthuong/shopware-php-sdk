<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\NewsletterRecipientTag;

use Vin\ShopwareSdk\Data\Entity\NewsletterRecipient\NewsletterRecipientEntity;
use Vin\ShopwareSdk\Data\Entity\Tag\TagEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class NewsletterRecipientTagEntity extends Entity
{
    public ?string $newsletterRecipientId = null;

    public ?string $tagId = null;

    public ?NewsletterRecipientEntity $newsletterRecipient = null;

    public ?TagEntity $tag = null;
}
