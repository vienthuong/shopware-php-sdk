<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\ProductCustomFieldSet;

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
class ProductCustomFieldSetDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_custom_field_set';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductCustomFieldSetEntity::class;
    }

    public function getEntityCollection(): string
    {
        return ProductCustomFieldSetCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('product_custom_field_set', new PropertyCollection([
            new Property('productId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('customFieldSetId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('productVersionId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('product', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'product',
                'referenceField' => 'id',
                'localField' => 'productId',
                'relation' => 'many_to_one',
            ]),
            new Property('customFieldSet', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'custom_field_set',
                'referenceField' => 'id',
                'localField' => 'customFieldSetId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
