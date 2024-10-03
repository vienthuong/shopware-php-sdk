<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\DocumentType;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Document\DocumentCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\DocumentBaseConfig\DocumentBaseConfigCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\DocumentTypeTranslation\DocumentTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeEntity extends Entity
{
    public ?string $name = null;

    public ?string $technicalName = null;

    public ?DocumentTypeTranslationCollection $translations = null;

    public ?DocumentCollection $documents = null;

    public ?DocumentBaseConfigCollection $documentBaseConfigs = null;

    public ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels = null;
}
