<?php declare(strict_types=1);

namespace Vin\Script;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

class DummyDefinitionClass implements EntityDefinition
{
    public const ENTITY_NAME = 'product';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return DummyEntityClass::class;
    }

    public function getEntityCollection(): string
    {
        return DummyCollectionClass::class;
    }
}
