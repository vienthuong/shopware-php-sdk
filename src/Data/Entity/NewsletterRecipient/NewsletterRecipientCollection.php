<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\NewsletterRecipient;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(NewsletterRecipientEntity $entity)
 * @method void set(string $key, NewsletterRecipientEntity $entity)
 * @method NewsletterRecipientEntity[] getIterator()
 * @method NewsletterRecipientEntity[] getElements()
 * @method NewsletterRecipientEntity|null get(string $key)
 * @method NewsletterRecipientEntity|null first()
 * @method NewsletterRecipientEntity|null last()
 */
class NewsletterRecipientCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return NewsletterRecipientEntity::class;
    }
}
