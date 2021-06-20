<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailTemplateMedia;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateMediaDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'mail_template_media';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MailTemplateMediaEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MailTemplateMediaCollection::class;
    }
}
