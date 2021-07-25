<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Tag;

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
class TagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return TagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return TagCollection::class;
    }

    public function getSchema() : Schema
    {
        return new Schema('tag', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('name', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('required', 1), new Flag('search_ranking', 500), ]), []),
            new Property('products', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'product', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('media', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'media', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('categories', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'category', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('customers', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'customer', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('orders', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'order', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('shippingMethods', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'shipping_method', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('newsletterRecipients', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'newsletter_recipient', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('landingPages', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), ]), ['entity' => 'landing_page', 'referenceField' => 'id', 'localField' => 'id', 'relation' => 'many_to_many', ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), ]), []),
        ]));
    }
}
