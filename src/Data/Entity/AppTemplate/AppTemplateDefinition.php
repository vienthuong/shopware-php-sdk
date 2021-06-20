<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppTemplate;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppTemplateDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'app_template';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return AppTemplateEntity::class;
    }

    public function getEntityCollection() : string
    {
        return AppTemplateCollection::class;
    }
}
