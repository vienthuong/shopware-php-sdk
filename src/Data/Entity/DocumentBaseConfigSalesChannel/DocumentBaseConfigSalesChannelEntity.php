<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\DocumentBaseConfigSalesChannel;

use Vin\ShopwareSdk\Data\Entity\DocumentType\DocumentTypeEntity;
use Vin\ShopwareSdk\Data\Entity\DocumentBaseConfig\DocumentBaseConfigEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class DocumentBaseConfigSalesChannelEntity extends Entity
{
    public ?string $documentBaseConfigId = null;

    public ?string $salesChannelId = null;

    public ?string $documentTypeId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?DocumentBaseConfigEntity $documentBaseConfig = null;

    public ?SalesChannelEntity $salesChannel = null;
}
