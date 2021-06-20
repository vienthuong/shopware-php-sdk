<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailTemplateTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'mail_template_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MailTemplateTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MailTemplateTranslationCollection::class;
    }
}
