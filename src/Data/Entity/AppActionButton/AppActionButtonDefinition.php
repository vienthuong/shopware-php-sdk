<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppActionButton;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppActionButtonDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'app_action_button';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return AppActionButtonEntity::class;
    }

    public function getEntityCollection() : string
    {
        return AppActionButtonCollection::class;
    }
}
