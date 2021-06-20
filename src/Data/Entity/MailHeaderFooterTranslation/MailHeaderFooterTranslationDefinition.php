<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailHeaderFooterTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailHeaderFooterTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'mail_header_footer_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MailHeaderFooterTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MailHeaderFooterTranslationCollection::class;
    }
}
