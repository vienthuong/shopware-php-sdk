<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DocumentBaseConfigSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentBaseConfigSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'document_base_config_sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return DocumentBaseConfigSalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return DocumentBaseConfigSalesChannelCollection::class;
    }
}
