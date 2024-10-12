<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\DocumentBaseConfig;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\DocumentType\DocumentTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentBaseConfigEntity extends Entity
{
    public ?string $documentTypeId = null;
    public ?string $logoId = null;
    public ?string $name = null;
    public ?string $filenamePrefix = null;
    public ?string $filenameSuffix = null;
    public ?bool $global = null;
    public ?string $documentNumber = null;
    public ?array $config = null;
    public ?DocumentTypeEntity $documentType = null;
    public ?MediaEntity $logo = null;
    public ?DocumentBaseConfigSalesChannelCollection $salesChannels = null;
}
