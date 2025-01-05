<?php declare(strict_types=1);
namespace examples\MyExampleEntity;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

class MyCustomDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'my_custom_entity';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MyCustomEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MyCustomCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema($this->getEntityName(), new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', json_decode('[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]', true)), new Flag('primary_key', 1), new Flag('required', 1), ]), []),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', json_decode('[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource","Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource"]]', true)), new Flag('required', 1), ]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', json_decode('[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource","Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource"]]', true)), ]), []),
        ]));
    }
}
