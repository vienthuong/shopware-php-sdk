<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\IntegrationRole;

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
class IntegrationRoleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'integration_role';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return IntegrationRoleEntity::class;
    }

    public function getEntityCollection(): string
    {
        return IntegrationRoleCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('integration_role', new PropertyCollection([
            new Property('integrationId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('aclRoleId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('integration', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'integration',
                'referenceField' => 'id',
                'localField' => 'integrationId',
                'relation' => 'many_to_one',
            ]),
            new Property('role', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'acl_role',
                'referenceField' => 'id',
                'localField' => 'aclRoleId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}
