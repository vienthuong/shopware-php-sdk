<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\NewsletterRecipientTag;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(NewsletterRecipientTagEntity $entity)
 * @method void set(NewsletterRecipientTagEntity $entity)
 * @method NewsletterRecipientTagEntity[] getIterator()
 * @method NewsletterRecipientTagEntity[] getElements()
 * @method NewsletterRecipientTagEntity|null get(string $key)
 * @method NewsletterRecipientTagEntity|null first()
 * @method NewsletterRecipientTagEntity|null last()
 */
class NewsletterRecipientTagCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return NewsletterRecipientTagEntity::class;
    }
}
