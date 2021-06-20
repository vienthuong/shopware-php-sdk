<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'state_machine_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return StateMachineTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return StateMachineTranslationCollection::class;
    }
}
