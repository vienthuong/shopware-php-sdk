<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ThemeChild;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeChildDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'theme_child';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ThemeChildEntity::class;
    }

    public function getEntityCollection(): string
    {
        return ThemeChildCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('theme_child', new PropertyCollection([
            new Property('parentId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('childId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('parentTheme', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'theme',
                'referenceField' => 'id',
                'localField' => 'parentId',
                'relation' => 'many_to_one',
            ]),
            new Property('childTheme', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'theme',
                'referenceField' => 'id',
                'localField' => 'childId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
