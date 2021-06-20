<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailTemplate;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'mail_template';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MailTemplateEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MailTemplateCollection::class;
    }
}
