<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NewsletterRecipient;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NewsletterRecipientDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'newsletter_recipient';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return NewsletterRecipientEntity::class;
    }

    public function getEntityCollection() : string
    {
        return NewsletterRecipientCollection::class;
    }
}
