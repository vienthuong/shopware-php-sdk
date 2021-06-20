<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailTemplateType;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'mail_template_type';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MailTemplateTypeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MailTemplateTypeCollection::class;
    }
}
