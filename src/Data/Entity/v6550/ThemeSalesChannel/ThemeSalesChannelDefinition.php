<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\ThemeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'theme_sales_channel';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ThemeSalesChannelEntity::class;
    }

    public function getEntityCollection(): string
    {
        return ThemeSalesChannelCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('theme_sales_channel', new PropertyCollection([
            new Property('salesChannelId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('themeId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1)]), []),
            new Property('theme', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'theme',
                'referenceField' => 'id',
                'localField' => 'themeId',
                'relation' => 'many_to_one',
            ]),
            new Property('salesChannel', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'sales_channel',
                'referenceField' => 'id',
                'localField' => 'salesChannelId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
